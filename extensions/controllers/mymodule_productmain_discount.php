<?php

class mymodule_productmain_discount extends mymodule_productmain_discount_parent {
   
   
    
    public function getdiscountprice($custnr,$pprice){

        $iPrice = $custnr." ".$pprice;

        $sQuery  = "SELECT discount FROM discounttable where customerno ='".$custnr."'"; 
		$oResult = oxDb::getDb()->Execute($sQuery); 
        return $oResult->fields[0];

       // return $iPrice;

    }
  /*  public function render(){
        $return = parent::render();

        $editObject = $this->_aViewData['edit'];
        $editObject->defaultValueSecondHeadline ='Second Headline';
        $this->_aViewData['edit'] = $editObject;

        return $return;
    }

    public function save(){

        return parent::save();
    }
 */
}