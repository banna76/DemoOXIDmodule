<?php

class mymodule_article_main extends mymodule_article_main_parent {

    public function render(){
        $return = parent::render();

        $editObject = $this->_aViewData['edit'];
        $editObject->defaultValueSecondHeadline ='Second Headline';
        $this->_aViewData['edit'] = $editObject;

        return $return;
    }

    public function save(){

        return parent::save();
    }

}