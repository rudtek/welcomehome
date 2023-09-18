<?php
function wh_communities($atts) {
   $endpoint_path = 'communities'; // define path here
   $html = '';

   if (is_admin() || wp_doing_ajax()) {
      // ...
   } else {
      // Parse the shortcode's options.
      $args = shortcode_atts(
         array(
            'path' => $endpoint_path,
            'debug' => ENABLE_DEBUG,
         ),
         $atts
      );

      $url = WH_API_URL. $args['path'];

      // add authorization for the request.
      $args_for_get = array (
         'headers' => array(
            'Authorization' => 'Token token='.TOKEN,
         )
      );
      // Execute the request.
      $response = wp_safe_remote_get($url, $args_for_get );
      $response_code = wp_remote_retrieve_response_code($response);

      if( is_wp_error( $response ) ) {
         $error_string = $response->get_error_message();
         $error_response = '<div id="message" class="error"><p>' . $error_string . '</p></div>';
            return $error_response;
      }

      if ($response_code != 200) {
         $html .= sprintf('<p><strong>ERROR:</strong> Received HTTP response %d from the server.</p>', $response_code);
      } elseif (empty($response)) {
         // No data returned from the server.
         $html .= sprintf('<p><strong>ERROR:</strong> Empty response from the server.</p>');
      } elseif (boolval($args['debug'])) {
         // Render the raw JSON response.
         $html .= '<pre>Debug:<br>';
         $html .= sprintf("HTTP_RESPONSE=%d\n", $response_code);
         $html .= print_r( $response, true );
         $html .= '</pre>';
      } else {
         //yeah we have good data lets go!
         $body = wp_remote_retrieve_body( $response );
         $data = json_decode( $body );
         $html .='<ul>';
         foreach ($data as $item) {
            $html .= '<li>'.$item->name.'</li>';
         }
         $html .='</ul>';
      }
   }

   return $html;
 }
 add_shortcode('list-communities', 'wh_communities');