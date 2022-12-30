<?php

// enum Status {
//     case Pending;
//     case Rejected;
//     case Accepted;
//     case Declined;
// }

// var_dump(Status::Pending);

// enum Status {
//     const Pending = 4;
//     const Rejected = 1;
//     const Accepted = 2;
//     const Declined = 3;
// }

// echo Status::Pending;

// if(Status::Pending  ==  0) {

// }

// if(Status::Pending  ==  0) {

// }

// if(Status::Pending  ==  0) {

// }

// interface 

// interface StatusInterface
// {
//     public static function getStatus($code);
// }

// enum Status implements StatusInterface
// {
//     const Pending = 0;
//     const Rejected = 1;
//     const Accepted = 2;
//     const Declined = 3;

//     public static function getStatus($code){
//         if($code  == self::Pending) {
//             return "Pending";
//         }

//         if($code  == self::Rejected) {
//             return "Rejected";
//         }

//         if($code  == self::Accepted) {
//             return "Accepted";
//         }

//         if($code  == self::Declined) {
//             return "Declined";
//         }
//     }
// }

// trait

trait StatusTrait {
    public static function getStatus($code){
        if ($code  == self::Pending) {
            return "Pending";
        }

        if ($code  == self::Rejected) {
            return "Rejected";
        }

        if ($code  == self::Accepted) {
            return "Accepted";
        }

        if ($code  == self::Declined) {
            return "Declined";
        }
    }
}


enum Status
{
    use StatusTrait;

    const Pending = 0;
    const Rejected = 1;
    const Accepted = 2;
    const Declined = 3;
}

echo Status::getStatus(1);






