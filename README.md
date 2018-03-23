# Simple Magento 2 API calculator #

## Installation ##
Copy and paste module to root Magento dirrectory then in CLI run php bin/magento setup:upgrade

## How to use ##
Call url http://host.com/rest/V1/api/rce/calculator/
### Parameters ###
 "left": First number (int|float),
 "right": Second number (int|float),
 "operator": Operator for operation (string),
 "precision": Predision (int) - Optional patameter , default 2
## Example request ##
{   
"left":112.1112323,   
"right" :123.324,   
"operator": 
"subtract",   
"precision": 1 
}
## Example response ##
{"status":"ok"},
{"result":-11.2}