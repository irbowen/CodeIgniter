TEST="curl http://localhost/CodeIgniter/index.php/rest/get/?fname=Barack&lname=Obama"
echo $TEST

RESPONSE=`$TEST`
echo $RESPONSE


TEST_POST="curl --data fname=Mike&lname=Carfella&data=Hadoop http://localhost/CodeIgniter/index.php/rest/post/"
echo $TEST_POST

RESPONSE_POST=`$TEST_POST`
echo $RESPONSE_POST
