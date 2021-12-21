    let ite_bars=0;
    let ite_file=0;
    function bars_function(){
        ite_bars++;
        
        if(ite_bars>1){
            document.querySelector('.container-bars').style.display='none';
            ite_bars=0;
        }
        else{
            document.querySelector('.container-bars').style.display='block'; 
        }
    }
    function form_file(){
        ite_file++;
        
        if(ite_bars>1){
            document.querySelector('.update_file').style.display='none';
            ite_file=0;
        }
        else{
            document.querySelector('.update_file').style.display='block'; 
        }
        return false;
    }
   //modal de las citas 
    function modal_actividades(){
        $(".add_realizar").click(function(e){
            e.preventDefault();
            var realizar=$(this).attr('realizada');
            alert(realizar);
         });
    }
    
    
   
 
window.onload=()=>{
    document.querySelector('.bars').addEventListener('click',bars_function);
   // document.querySelector('.button_file').addEventListener('click',form_file);
    $(".button_file").on("click",function(event){
        event.preventDefault();
        form_file();
     });


     if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
     }
 
}