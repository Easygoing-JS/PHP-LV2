<?php

    class GoodFull extends Good
    {

        private $text;  // новое свойство (поле)
        public $good;


        //  по id в реальности
        public function __construct($id, $name, $price, $discount, $description, $text)
        {

            Parent::__construct($id, $name, $price, $discount, $description); // ?обращение к родителю напрямую нарушает принцип инкапсуляции
            // устанавливаем новое свойство (поле)
            $this->setGoodFull($text);
            echo "Метод " . __METHOD__ . " класса " . __CLASS__ . "<br>";
        }

        public function __destruct()
        {
            Parent::__destruct();
            echo "Метод " . __METHOD__ . " класса " . __CLASS__ . "<br>";
        }

        protected function setGoodFull($text)
        {
            // добавляем новое свойство (поле)
            $this->good['text'] = $text;
        }


        public function getGoodFull()
        {
            $this->good = Parent::getGood();
            return $this->good;
        }

    }