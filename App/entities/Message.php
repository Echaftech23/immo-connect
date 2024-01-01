<?php
class Message {
    private $id;
    private $content;
    private $datePublication;
    private $status;
    private $receiver_id;
    private $sender_id;

    public function __construct($id, $content, $datePublication, $status, $receiver_id, $sender_id) {
        $this->id = $id;
        $this->content = $content;
        $this->datePublication = $datePublication;
        $this->status = $status;
        $this->receiver_id = $receiver_id;
        $this->sender_id = $sender_id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getDatePublication() {
        return $this->datePublication;
    }

    public function setDatePublication($datePublication) {
        $this->datePublication = $datePublication;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getReceiverId() {
        return $this->receiver_id;
    }

    public function setReceiverId($receiver_id) {
        $this->receiver_id = $receiver_id;
    }

    public function getSenderId() {
        return $this->sender_id;
    }

    public function setSenderId($sender_id) {
        $this->sender_id = $sender_id;
    }
}
