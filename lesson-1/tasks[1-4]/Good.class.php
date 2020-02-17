<?php

    class Good
    {

        private $id;
        private $name;
        private $price;
        private $discount;
        private $description;
        public $good = array();

        //счётчик объектов
        public $counter;
        private static $countObects = 0; // переменная класса, счетчик родительских и дочерних объектов класса

        private $str = '';  //строка вывода объекта (посмотреть, что внутри)


        public function __construct($id, $name = '', $price = 0, $discount = 0, $description = '')
        { //  по id в реальности

            $this->setGood($id, $name, $price, $discount, $description);

            // суммируем счетчик. Можно вывести кол-во объектов класса на текущий момент
            $this->counter = self::$countObects++;

            echo "Метод " . __METHOD__ . " класса " . __CLASS__ . "<br>";
        }

        public function __destruct()
        {
            echo "Метод " . __METHOD__ . " класса " . __CLASS__ . "<br>";
            self::$countObects--; // при удалении объекта уменьшаем счетчик
        }

        protected function setGood($id, $name, $price, $discount, $description)
        {
            // setGood($id)
            // запрос из базы данных по id.... по нему получаем массив.
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->discount = $discount;
            $this->description = $description;

        }

        public static function getCounter()
        {
            return self::$countObects;
        }

        public function getGood()
        {

            $this->good['id'] = $this->id;
            $this->good['name'] = $this->name;
            $this->good['price'] = $this->price;
            $this->good['discount'] = $this->discount;
            $this->good['description'] = $this->description;

            return $this->good;

        }


        public function __toString()
        {
            foreach ($this->good AS $key => $value) {
                $this->str .= "{$key}: {$value}<br>";
            }
            if ($this->str != '')
                $this->str .= '<hr>';
            echo $this->str;
        }

    }