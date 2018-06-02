<?php
namespace App\Presenters;
class ShowErrorsPresenter
{

    public function show_errors($errors)
    {
        if (count($errors) > 0){
            $list = "<script> alertify.set('notifier','position', 'top-right');";
            foreach ($errors->all() as $error){
                $list .= "alertify.error('{$error}');";
            }
            return $list.'</script>';
        }
    }

}