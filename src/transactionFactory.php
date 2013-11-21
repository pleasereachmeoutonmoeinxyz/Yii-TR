<?php
    /**
     * @property transactionFactory $_instance
     * @property CDbTransaction $_transaction
     */
    class transactionFactory extends CComponent
    {
        protected static $_transaction = null;

        public static function beginTransaction() 
        {
            if (!isset(self::$_transaction))
                self::$_transaction =   Yii::app ()->db->beginTransaction ();
        }
        
        public static function commit()
        {
            if (isset(self::$_transaction) && self::$_transaction->active)
                self::$_transaction->commit ();
        }
        
        public static function rollback()
        {
            if (isset(self::$_transaction) && self::$_transaction->active)
                self::$_transaction->rollback ();
        }
        
        public static function renew($commit = false)
        {
            if (isset(self::$_transaction) && self::$_transaction->active){
                if ($commit === TRUE)
                    self::$_transaction->commit ();
                else
                    self::$_transaction->rollback ();
            }
            self::$_transaction =   NULL;
        }
    }
?>