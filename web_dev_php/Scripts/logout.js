$("#logout").on('click',function(){
    $ajax ({
        type :'post',
        url:'../Php/logout.php',
        sucess : function(response){
            if(response=== "sesionout"){
                window.location= "http://localhost/web_dev_php/";
            }
        }
    }
    )
})