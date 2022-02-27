<?php

/**
 * Description of Coletor
 *
 * @author Administrator
 */
class Coletor {

    private $consumer_key;
    private $consumer_secret;
    private $access_token;
    private $access_token_secret;

    function getConsumer_key() {
        return $this->consumer_key;
    }

    function getConsumer_secret() {
        return $this->consumer_secret;
    }

    function getAccess_token() {
        return $this->access_token;
    }

    function getAccess_token_secret() {
        return $this->access_token_secret;
    }

    function setConsumer_key($consumer_key) {
        $this->consumer_key = $consumer_key;
    }

    function setConsumer_secret($consumer_secret) {
        $this->consumer_secret = $consumer_secret;
    }

    function setAccess_token($access_token) {
        $this->access_token = $access_token;
    }

    function setAccess_token_secret($access_token_secret) {
        $this->access_token_secret = $access_token_secret;
    }
}
?>