<?php


class Schedule extends Table
{
    public $schedule_id=0;
    public $lesson_plan_id=0;
    public $day_id=0;
    public $lesson_num_id=0;
    public  $classroom_id=0;
    public function validate()
    {
        try {
            if (!empty($this->lesson_plan_id) && !empty($this->day_id) && !empty($this->lesson_num_id) && !empty($this->classroom_id)) {
            return true;
            } else {
                throw new Exception('Не переданны всепараметры');
            }
        } catch (Exception $ex) {
            return false;
         }   

    }
}