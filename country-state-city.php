<?php
// js function
function getChangeData(edit_id = null, main_id, put_id, put_select_value, change_id = null, change_select_value = null){
    var table_name = $('#'+main_id).attr('data-table');
    var id = $('#'+main_id + ' option:selected').val();
   
    $.ajax({
                url: SITEURL + '/admin/get-all-data',
                type: 'post',
                dataType: 'json',
                data: {
                    id: id,
                    table_name: table_name,
                    find_id :main_id,
                    edit_id :edit_id
                },
                success: function (msg)
                {
                    if (msg.success == true) {
                        var opt = '<option value="">'+ put_select_value+' </option>';
                        $.each(msg.result, function (i, item) {
                            var selected = (item.id == edit_id)?('selected'):('');
                            
                            opt += '<option value="' + item.id + '"  '+selected+'>' + item.name + '</option>';
                        });
                        $('#'+put_id).html(opt);

                        var htm = '<option value="">'+ change_select_value+'</option>';
                        $('#'+change_id).html(htm);
                    } else
                    {

                        var opt = '<option value="">'+ put_select_value+'</option>';
                        $('#'+put_id).html(opt);

                        var htm = '<option value="">'+ change_select_value+'</option>';
                        $('#'+change_id).html(htm);
                    }
                }
            });

 }

Ajax function
public function getAllData(Request $request) {

        $id = $request->get('id');
        $find_id = $request->get('find_id');
        $tableName = decode($request->get('table_name'));
        $result = DB::table($tableName)->select('id', 'name')->where(array($find_id => $request->get('id'), 'status' => 'Active'))->get();
        if (count($result) > 0) {
            $res = array('success' => true, 'message' => 'Record Successfully Found', 'result' => $result);
            return Response::json($res);
        } else {
             $res = array('success' => false, 'message' => 'Record not Found', 'result' => array());
            return Response::json('0');
        }
    }


Html Function
<select name="country" id="country_id" data-table="{{ encode('state') }}" onchange="getChangeData(' ', 'country_id', 'state_id', 'Select State', 'city_id', 'Select City')" class="form-control select2" style="width: 100%;">
                                        <option value="">Select Country</option>  
                                        @if(!empty($all_country))  
                                        @foreach($all_country as $cInfo)
                                        <option value="{{ $cInfo->id }}">{{ $cInfo->name }}</option>  
                                        @endforeach
                                        @endif 
                                    </select>


Edit Function on window onload :-

$(window).on('load',function() {

        var cityId = '<?php echo (!empty($user_info->city_id))?($user_info->city_id):(''); ?>'; 
        var stateId =  '<?php echo (!empty($user_info->state_id))?($user_info->state_id):(''); ?>';
        if(stateId != ''){

            getChangeData(stateId, 'country_id', 'state_id', 'Select State', 'city_id', 'Select City');
        }

        if(cityId != ''){
            setTimeout(function () {
               getChangeData(cityId, 'state_id', 'city_id', 'Select City');
            }, 1000);
            
        }
    });


Helper Function :-

if (!function_exists('safe_b64encode')) {

    function safe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+', '/', '='), array('-', '_', ''), $data);

        return $data;
    }

}
if (!function_exists('safe_b64decode')) {

    function safe_b64decode($string) {
        $data = str_replace(array('-', '_'), array('+', '/'), $string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }

        return base64_decode($data);
    }

}
if (!function_exists('encode')) {

    function encode($value) {
        $skey = 'D99p@K$uN&r@DKS1';
        if (!$value) {
            return false;
        }
        $text = $value;
        $crypttext = str_rot13($text . $skey);
        return trim(safe_b64encode($crypttext));
    }

}

if (!function_exists('decode')) {

    function decode($value) {
        $skey = 'D99p@K$uN&r@DKS1';
        if (!$value) {
            return false;
        }
        $crypttext = safe_b64decode($value);
        $text = str_rot13($crypttext);
        $decrypttext = str_replace($skey, "", $text);
        return trim($decrypttext);
    }
}