
$(document).ready(function(){
    $('#college_desc').on('change', function(){
        var iso2 = $(this).val();
    
        if(iso2){
            $.ajax({
                type:'POST',
                url:'getAjaxData.php',
                data:'iso2_val='+iso2,
                success:function(html){
                    $('#course_desc').html(html);
                    $('#subject_desc').html('<option value="">Select subject first</option>'); 
                }
            }); 
        }else{
            $('#course_desc').html('<option value="">Select college first</option>');
            $('#subject_desc').html('<option value="">Select course first</option>'); 
        }
    });
    
    $('#course_desc').on('change', function(){
        var collegeIdVal = $('#college_desc').val();
        var iso2ID = $(this).val();
        if(iso2ID){
            $.ajax({
                type:'POST',
                url:'getAjaxData.php',
                data:'state_iso2='+iso2ID+'&sel_country_id='+countryIdVal,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});