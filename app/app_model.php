<?php

class AppModel extends Model {
	
    var $actsAs = array('PersianDate', 'PersianSanitize');
    var $outputConvertDate = true;
    var $inputConvertDate = true;
    var $convertDateFormat = 'j F Y';
    
}

?>
