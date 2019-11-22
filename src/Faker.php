<?php
/**
 * Mohammadsalmani28/Faker package
 */

namespace Mohammadsalmani28\Faker;

class Faker
{

    public function __construct()
    {
        //include librrary array
        $this->objects = require __DIR__ . '/libs/library.php';

        // custom helper include
        $this->object = require 'helper.php';
    }

    /**
     * return random data in object
     * $object is a name of index of librrary
     * @author mohammadsalmani28
     */
    private function getRandomKey($object = null)
    {
        $name = 0;
        $array = [];

        if (is_array($object)) {
            $array = $object;
            $name = array_rand($object);
        } elseif (is_string($object)) {
            $array = $this->objects[$object];
            $name = array_rand($array);
        }

        return string($array[$name]);
    }

    /**
     * return a random first name
     */
    private function firstName()
    {
        $x = rand(0, 100);
        if ($x % 2 == 0) {
            $female = $this->getRandomKey('femaleName');
            return (object)['gender' => 'female', 'name' => $female];
        } else {
            $male = $this->getRandomKey('maleName');
            return (object)['gender' => 'male', 'name' => $male];
        }
    }

    /**
     * return a random last name
     */
    private function lastName()
    {
        return $this->getRandomKey('lastName');
    }

    /**
     * return a random email address .
     * it's a random and fake email address not ussable
     * gmail , yahoo , msn , hotmail domain
     * $count is length of email address string
     * if not set parametr to method auto return random between 6-10 length string
     */
    public function email($count = null)
    {
        if (!is_null($count)) {
            $mail = strtolower(str_random($count));
        } else {
            $mail = strtolower(str_random(rand(6, 10)));
        }
        $email = $mail . $this->getRandomKey('email');
        return $email;
    }

    /**
     * return a random of job title
     */
    public function jobTitle()
    {
        return $this->getRandomKey('jobTitle');
    }

    /**
     * return a random word
     */
    public function word()
    {
        return $this->getRandomKey('word');
    }

    /**
     * return a random sentence
     */
    public function sentence()
    {
        return $this->getRandomKey('sentence') . '.';
    }

    /**
     * return a random paragraph
     */
    public function paragraph()
    {
        return $this->getRandomKey('paragraph') . '.';
    }

    /**
     * return a random mobile phone number
     * return random 10 legnth number with iranian mobile mobile code like : 0912 , ...
     */
    public function mobile()
    {
        $prefix = $this->getRandomKey('mobile');
        $phone = string('0' . $prefix . randomNumber(7));
        return (strlen($phone) !== 11 ? $phone . rand(1, 10) : $phone);

    }

    /**
     * return a random telephone number
     */
    public function telephone()
    {
        $prefix = $this->getRandomKey('telephone');
        return string('0' . $prefix . randomNumber(7));
    }

    /**
     * return random city of iran
     */
    public function city()
    {
        return $this->getRandomKey('city');
    }

    /**
     * return random state of iran
     */
    public function state()
    {
        return $this->getRandomKey('state');
    }

    /**
     * return a random domain address .
     * $length is length of domain name
     * if not set parametr to method auto return random between 5-8 length string
     * tlds are like com , net , ir , co , co.ir , ...
     * random web protocol http & https
     */
    public function domain($length = null)
    {
        if (!is_null($length)) {
            $domainName = strtolower(str_random($length));
        } else {
            $domainName = strtolower(str_random(rand(5, 8)));
        }
        $domain = $this->getRandomKey('protocol') . '://' . 'www.' . $domainName . '.' . $this->getRandomKey('domain');
        return $domain;

    }

    /**
     * return 10 length random number
     */
    public function mellicode()
    {
        return randomNumber(10);
    }

    /**
     * return a random birthday date
     * year strating from 1333 - 1380
     * $sign to sign between year mouth year
     * default sign is '/'
     * return year/mouth/day
     */
    public function birthday($sign = null)
    {
        $year = rand(1333, 1380);
        $mouth = rand(1, 12);
        $day = rand(1, 30);
        if (!is_null($sign)) {
            return $year . $sign . $mouth . $sign . $day;
        } else {
            $sign = '/';
            return $year . $sign . $mouth . $sign . $day;
        }
    }

    /**
     * return an object with fullname, gender, firstName, lastName properties
     */
    public function Name()
    {
        $firstName = $this->firstName();
        $lastName = $this->lastName();
        return (object)[
            'gender' => $firstName->gender,
            'full' => $firstName->name . ' ' . $lastName,
            'firstName' => $firstName->name,
            'lastName' => $lastName,
        ];
    }

    /**
     * return random age
     * you can use $min for minimum start age and max for maximum age
     * if $min and $max is null return random age between 18-50 years;
     */
    public function age($min = null, $max = null)
    {
        if (!is_null($min) && !is_null($min)) {
            $age = rand($min, $max);
        } else {
            $age = rand(18, 50);
        }
        return $age;
    }

    /**
     * return random address
     */
    public function address()
    {
        return $this->getRandomKey('address');
    }

    /**
     * return random ip address
     */
    public function ip()
    {
        $string = '';
        for ($i=0;$i<4;$i++){
            $string .= rand(1,255).'.';
        }
        $string =substr($string, 0, -1);
        return $string;
    }

    /**
     * return random company name
     */
    public function company()
    {
        return $this->getRandomKey('company');
    }


}
