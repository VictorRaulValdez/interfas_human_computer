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
    
   
 
window.onload=()=>{
    document.querySelector('.bars').addEventListener('click',bars_function);
   // document.querySelector('.button_file').addEventListener('click',form_file);
    $(".button_file").on("click",function(event){
        event.preventDefault();
        form_file();
     });
 
 
}