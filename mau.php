<?
$khoToken = [];
echo $dp_tool.$luc."Bạn Muốn Nuôi Bao Nhiêu Clone$trang:$vang ";
$sltk = trim(fgets(STDIN));
echo $thanh_thang_mau_trang;
for($a=1;$a<=$sltk;$a++){
echo $dp_tool.$luc."Nhập Cookie Clone Thứ \033[1;37m$a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);
    }
    $js=json_encode($khoToken);
    $demcki=count($khoToken);

echo $dp_tool.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Đổi Nick$trang:$vang "; 
$doiacc = (int)trim(fgets(STDIN));
       if ($dem == 0 && $doiacc == 0) {
    $spam = 1;
    break;
}
