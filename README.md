Yii-TR
======

Simple class to use transaction in Yii framework

##Setup:
copy transactionFactory.php under protected/components folder
##Usage:
```
transactionFactory::beginTransaction();
transactionFactory::commit();
transactionFactory::rollback();
```
#Why:
--If you work with more than one model and need transaction in them,it can be useful to write less code.
--It helps you to check transaction status. 
