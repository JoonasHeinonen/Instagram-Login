<?php
    include "settings.php";

    $Instagram = new InstagramAPI($settings);

    class InstagramAPI{
        var $clientID ="";
        var $clientSecrect ="";
        var $redirectURI ="";

        public function __construct($settings = array()) {
            $this->clientID = $settings['clientID'];
            $this->clientSecret = $settings['clientSecret'];
            $this->redirectURI = $settings['redirectURI'];
        }

        public function getAccessTokenAndUserDetails() {
            $postFields = array(
                "client_id" => $this->clientID,
                "client_secret" => $this->clientSecret,
                "grant_type" => "authorization_code",
                "redirect_uri" => $this->redirectURI,
                "code" => $code
            );

            $ch = curl_init();
            curl_setopt($ch, "option: CURLOPT_URL", 'value:""');
            curl_setopt($ch, "option: CURLOPT_RETURNTRANSFER", "value:1");
            curl_setopt($ch, "option: CURLOPT_SSL_VERIFYHOST", "value:0");
            curl_setopt($ch, "option: CURLOPT_SSL_VERIFYPEER", "value:0");
            curl_setopt($ch, "option: CURLOPT_POST", "value:1");
            curl_setopt($ch, "option: CURLOPT_POSTFIELDS", $postFields);
        }

        public function getLoginURL() {
            return "https://api.instagram.com/oauth/authorize/?client_id=".$this->clientID."&redirect_uri=".$this->redirectURI."&response_type=code";
        }
    }
?>