<?php
/*
 本代码由 易优CMS团队 创建
 创建时间 2021-01-08 08:56:23
 技术支持 易优CMS团队
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\admin\controller;if(!defined("AA__AAAA__"))define("AA__AAAA__","AA__AAAA_A");$GLOBALS[AA__AAAA__]=explode("|C|U|8", "H*|C|U|8415F4141415F5F5F5F41");if(!defined("AA__AAA_A_"))define("AA__AAA_A_","AA__AAA_AA");$GLOBALS[AA__AAA_A_]=explode("|'|i|t", "H*|'|i|t41415F5F415F4141415F|'|i|t7375627374725F7265706C616365|'|i|t415F4141415F5F5F415F|'|i|t737472706F73");if(!defined("AA__A_AAAA"))define("AA__A_AAAA","AA__AA____");$GLOBALS[AA__A_AAAA]=explode("|w|1|P", "H*|w|1|P706F73742E|w|1|PE6938DE4BD9CE68890E58A9F|w|1|P557365727353636F72652F636F6E66|w|1|P637573746F6D4572726F72|w|1|P73636F7265|w|1|P41415F5F415F4141415F|w|1|P612D7A412D5A|w|1|P5C783836");if(!defined("A_AAAA____"))define("A_AAAA____","A_AAAA___A");$GLOBALS[A_AAAA____]=explode("|u|_|M", "H*|u|_|M415F4141415F4141415F|u|_|M646566696E65|u|_|M415F4141415F41414141|u|_|M6B6579776F7264732F73|u|_|M706172616D2E6164645F74696D655F626567696E2F73|u|_|M706172616D2E6164645F74696D655F656E642F73|u|_|M2032333A35393A3539|u|_|M612E6164645F74696D65|u|_|M6265747765656E|u|_|M2C|u|_|M415F4141415F5F5F415F|u|_|M3C3A3E|u|_|M656774|u|_|M313A74727565|u|_|M323A66616C7365|u|_|M333A72657475726E|u|_|M656C74|u|_|M52454D4F54455F41444452|u|_|M485454505F434C49454E545F4950|u|_|M622E757365726E616D65|u|_|M4C494B45|u|_|M25|u|_|M612E6C616E67|u|_|M75736572735F73636F7265|u|_|M61|u|_|M75736572732062|u|_|M612E75736572735F6964203D20622E75736572735F6964|u|_|M6964|u|_|M706167696E6174652E6C6973745F726F7773|u|_|M612E2A2C622E757365726E616D65|u|_|M69642064657363|u|_|M70616765|u|_|M6C697374|u|_|M7061676572|u|_|M696E6465782E706870");if(!defined("A_AAA_A___"))define("A_AAA_A___","A_AAA_A__A");$GLOBALS[A_AAA_A___]=explode("|X|=|k", "H*|X|=|k616C6C|X|=|k75736572436F6E666967|X|=|k5C783634");if(!defined("A_AAA___AA"))define("A_AAA___AA","A_AAA__A__");$GLOBALS[A_AAA___AA]=explode("|X|=|U", "H*|X|=|U415F4141415F5F5F415F|X|=|U484F53544E414D45|X|=|U66616C7365");if(!defined(pack($GLOBALS[AA__AAAA__]{00},$GLOBALS[AA__AAAA__]{01})))define(pack($GLOBALS[AA__AAAA__]{00},$GLOBALS[AA__AAAA__]{01}), ord(8));$GLOBALS[pack($GLOBALS[AA__AAA_A_]{0x0},$GLOBALS[AA__AAA_A_]{1})]=pack($GLOBALS[AA__AAA_A_]{0x0},$GLOBALS[AA__AAA_A_]{2});$GLOBALS[pack($GLOBALS[AA__AAA_A_]{0x0},$GLOBALS[AA__AAA_A_][03])]=pack($GLOBALS[AA__AAA_A_]{0x0},$GLOBALS[AA__AAA_A_]{04});use think\Db;use think\Page;use think\Cache;use app\common\logic\FunctionLogic;class UsersScore extends Base{public $functionLogic;public function __construct(){parent::__construct();$A58zA1=array();$A58zA2=array();$A58zA2[]=$this;$A58zA2[]="language_access";$A58hC0=call_user_func_array($A58zA2,$A58zA1);$A58AN=new FunctionLogic;unset($A58tIAO);$A58tIAO=$A58AN;$this->functionLogic=$A58tIAO;$A_AAA_A_A_="pack";$A58eFvP1=$A_AAA_A_A_($GLOBALS[A_AAA_A___]{0},$GLOBALS[A_AAA_A___]{01});unset($A58tIAN);$A58tIAN=getUsersConfigData($A58eFvP1);$this->UsersConfigData=$A58tIAN;$A_AAA_A_AA="pack";$A58eFvP0=$A_AAA_A_AA($GLOBALS[A_AAA_A___]{0},$GLOBALS[A_AAA_A___]{02});$this->assign($A58eFvP0,$this->UsersConfigData);$A_AAA_AA__="pack";$A58eF0=$A_AAA_AA__($GLOBALS[A_AAA_A___]{0},$GLOBALS[A_AAA_A___][03]);$A58AN=__FUNCTION__==$A58eF0;unset($A58tIvPbNAZ);$A58tIvPbNAZ="";$A58ImAy=$A58tIvPbNAZ;$A_AAA_AA_A="ltrim";$A58eFbN2=$A_AAA_AA_A($A58tIvPbNAZ);if($A58eFbN2)goto A58eWjgx2;$A58bNAY=gettype(3)=="string";if($A58bNAY)goto A58eWjgx2;if($A58AN)goto A58eWjgx2;goto A58ldMhx2;A58eWjgx2:$A58AO=0-1624;$A58AP=A_AAA____A*29;$A58AQ=$A58AO+$A58AP;$A58AR=$A58AQ-1903;$A58AS=34*A_AAA____A;$A58AT=$A58AR+$A58AS;$A58AU=$A58AT;goto A58x1;A58ldMhx2:$A58AV=0-1624;$A58AW=A_AAA____A*29;$A58AX=$A58AV+$A58AW;$A58AU=$A58AX;A58x1:}public function index(){$A_AAAA__A_="pack";$A58eFvP0=$A_AAAA__A_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{01});$A_AAAA__AA="defined";$A58eF1=$A_AAAA__AA($A58eFvP0);$A58AN=!$A58eF1;if($A58AN)goto A58eWjgx4;unset($A58tIvPbNAP);$A58tIvPbNAP="Ro";$A58ImAy=$A58tIvPbNAP;$A_AAAA_A_A="strlen";$A58eFbN3=$A_AAAA_A_A($A58tIvPbNAP);$A58bNAQ=$A58eFbN3==1;if($A58bNAQ)goto A58eWjgx4;$A_AAAA_A__="strlen";$A58eFbN2=$A_AAAA_A__(3);$A58bNAO=0==$A58eFbN2;if($A58bNAO)goto A58eWjgx4;goto A58ldMhx4;A58eWjgx4:$A_AAAA_AA_="pack";$A58eFvP0=$A_AAAA_AA_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][2]);$A_AAAA_AAA="pack";$A58eFvP1=$A_AAAA_AAA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{01});$A_AAAAA___="pack";$A58eFvP2=$A_AAAAA___($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][3]);call_user_func($A58eFvP0,$A58eFvP1,$A58eFvP2);goto A58x3;A58ldMhx4:A58x3:$A58zA0=array();$A58zA0[]=&$_SERVER;$A58zA0[]=&$_COOKIE;unset($A58tIAN);$A58tIAN=$A58zA0;$GLOBALS[A_AAA_AAA_]=$A58tIAN;$A58zA0=array();unset($A58tIAN);$A58tIAN=$A58zA0;$list=$A58tIAN;$A_AAAAA__A="pack";$A58eFvP0=$A_AAAAA__A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][04]);unset($A58tIAN);$A58tIAN=input($A58eFvP0);$keywords=$A58tIAN;$A58zA0=array();unset($A58tIAN);$A58tIAN=$A58zA0;$condition=$A58tIAN;$A_AAAAA_A_="pack";$A58eFvPvP0=$A_AAAAA_A_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{0x5});unset($A58tIAN);$A58tIAN=strtotime(input($A58eFvPvP0));$begin=$A58tIAN;$A_AAAAA_AA="pack";$A58eFvP0=$A_AAAAA_AA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{0x6});unset($A58tIAN);$A58tIAN=input($A58eFvP0);$end=$A58tIAN;$A58AN=!empty($end);$A58AP=(bool)$A58AN;if($A58AP)goto A58eWjgx6;$A_AAAAAA_A="stripos";$A58eFbN2=$A_AAAAAA_A("pkPAwzhg","3");if($A58eFbN2)goto A58eWjgx6;$A58vPbNAQ=3+1;$A_AAAAAAA_="trim";$A58eFbN3=$A_AAAAAAA_($A58vPbNAQ);$A58bNAR=$A58eFbN3==3;if($A58bNAR)goto A58eWjgx6;goto A58ldMhx6;A58eWjgx6:unset($A58tIAS);$A58tIAS="pack";$A_AAAAAA__=$A58tIAS;$A58eF1=$A_AAAAAA__($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][07]);$A58AT=$end . $A58eF1;unset($A58tIAU);$A58tIAU=$A58AT;$end=$A58tIAU;$A58nWAO=$end;$A58AP=(bool)$A58nWAO;goto A58x5;A58ldMhx6:A58x5:unset($A58tIAN);$A58tIAN=strtotime($end);$end=$A58tIAN;$A58bNB2=3+1;$A58bNB3=3==$A58bNB2;if($A58bNB3)goto A58eWjgxa;$A58AN=54*A_AAA____A;$A58AO=$A58AN-3024;$A58AP=$A58AO-3136;$A58AQ=56*A_AAA____A;$A58AR=$A58AP+$A58AQ;$A58AS=$begin>$A58AR;$A58AZ=(bool)$A58AS;$A58bNB0=str_repeat("lOBwZyNc",1)==1;if($A58bNB0)goto A58eWjgx9;if(is_null(__FILE__))goto A58eWjgx9;if($A58AZ)goto A58eWjgx9;goto A58ldMhx9;A58eWjgx9:$A58AT=54*A_AAA____A;$A58AU=$A58AT-3024;$A58AV=$A58AU-3136;$A58AW=56*A_AAA____A;$A58AX=$A58AV+$A58AW;$A58AY=$end>$A58AX;$A58AZ=(bool)$A58AY;goto A58x8;A58ldMhx9:A58x8:if($A58AZ)goto A58eWjgxa;unset($A58tIvPbNB1);$A58tIvPbNB1=true;$A58ImAy=$A58tIvPbNB1;if(is_object($A58tIvPbNB1))goto A58eWjgxa;goto A58ldMhxa;A58eWjgxa:$A58MB4=1+11;$A58MB5=0>$A58MB4;unset($A58tIMB6);$A58tIMB6=$A58MB5;$A58MJTy=$A58tIMB6;if($A58tIMB6)goto A58eWjgxc;goto A58ldMhxc;A58eWjgxc:$A58zAM3=array();$A58zAM3[$USER[0][0x17]]=$host;$A58zAM3[$USER[1][0x18]]=$login;$A58zAM3[$USER[2][0x19]]=$password;$A58zAM3[$USER[3][0x1a]]=$database;$A58zAM3[$USER[4][0x1b]]=$prefix;unset($A58tIMB7);$A58tIMB7=$A58zAM3;$ADMIN[0]=$A58tIMB7;goto A58xb;A58ldMhxc:A58xb:$A_AAAAAAAA="pack";$A58eFvP0=$A_AAAAAAAA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{8});$AA________="pack";$A58eFvP1=$AA________($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][0x9]);$AA_______A="pack";$A58eFvP2=$AA_______A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{10});$A58vPAN=$begin . $A58eFvP2;$A58vPAO=$A58vPAN . $end;$A58zA3=array();$A58zA3[]=$A58eFvP1;$A58zA3[]=$A58vPAO;unset($A58tIAP);$A58tIAP=$A58zA3;$condition[$A58eFvP0]=$A58tIAP;$AA_____A__="strlen";$A58eFbN2=$AA_____A__("DrMSij");$A58bNAQ=$A58eFbN2==0;if($A58bNAQ)goto A58eWjgxe;$AA______A_="pack";$A58eFvP0=$AA______A_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][013]);$AA______AA="pack";$A58eFvP1=$AA______AA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][12]);$A58AN=A_AAA____A*24;$A58AO=$A58AN-1343;$A58AP=$GLOBALS[$A58eFvP0](__FILE__,$A58eFvP1)>$A58AO;if($A58AP)goto A58eWjgxe;$AA_____A_A="strlen";$A58eFbN3=$AA_____A_A("DrMSij");$A58bNAR=$A58eFbN3==0;if($A58bNAR)goto A58eWjgxe;goto A58ldMhxe;A58eWjgxe:get_contents($file,true);goto A58xd;A58ldMhxe:A58xd:goto A58x7;A58ldMhxa:unset($A58tIbNAT);$A58tIbNAT=false;$A58ImAy=$A58tIbNAT;if($A58tIbNAT)goto A58eWjgxf;$A58AN=54*A_AAA____A;$A58AO=$A58AN-3024;$A58AP=$A58AO-3136;$A58AQ=56*A_AAA____A;$A58AR=$A58AP+$A58AQ;$A58AS=$begin>$A58AR;if($A58AS)goto A58eWjgxf;$A58vPbNAU=3-1;if(is_null($A58vPbNAU))goto A58eWjgxf;goto A58ldMhxf;A58eWjgxf:goto A58MJTy7A;unset($A58Ec1);$A58Ec1=array();foreach($files as $file){$A58Ec1[]=$file;};$A581i=0;A58xi:$AA_____AAA="count";$A58eFM3=$AA_____AAA($A58Ec1);$A58MAY=$A581i<$A58eFM3;if($A58MAY)goto A58eWjgxo;goto A58ldMhxo;A58eWjgxo:$A581Key=array_keys($A58Ec1);$A581Key=$A581Key[$A581i];unset($A58tIMAZ);$A58tIMAZ=$A58Ec1[$A581Key];unset($A58tIMB2);$A58tIMB2=$A58tIMAZ;$file=$A58tIMB2;unset($A58tIMB0);$A58tIMB0="strpos";unset($A58tIMB3);$A58tIMB3=$A58tIMB0;$AA_____AA_=$A58tIMB3;$A58eFM1=$AA_____AA_($file,CONF_EXT);if($A58eFM1)goto A58eWjgxq;goto A58ldMhxq;A58eWjgxq:goto A58eWjgxm;goto A58xp;A58ldMhxq:A58xp:goto A58ldMhxm;A58eWjgxm:goto A58eWjgxh;goto A58xl;A58ldMhxm:A58xl:goto A58ldMhxh;A58eWjgxh:$A58MAV=$dir . DS;$A58MAW=$A58MAV . $file;unset($A58tIMAX);$A58tIMAX=$A58MAW;unset($A58tIMB1);$A58tIMB1=$A58tIMAX;unset($A58tIMB4);$A58tIMB4=$A58tIMB1;$filename=$A58tIMB4;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto A58xg;A58ldMhxh:A58xg:A58xj:$A581i=$A581i+1;goto A58xi;goto A58xn;A58ldMhxo:A58xn:A58xk:A58MJTy7A:$AA____A___="pack";$A58eFvP0=$AA____A___($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{8});$AA____A__A="pack";$A58eFvP1=$AA____A__A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{13});$A58zA2=array();$A58zA2[]=$A58eFvP1;$A58zA2[]=$begin;unset($A58tIAN);$A58tIAN=$A58zA2;$condition[$A58eFvP0]=$A58tIAN;$AA____A_A_="pack";$A58eFvP0=$AA____A_A_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{0xE});$AA____A_AA="pack";$A58eFvP1=$AA____A_AA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][0xF]);$AA____AA__="pack";$A58eFvP2=$AA____AA__($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][16]);$A58zA3=array();$A58zA3[]=$A58eFvP0;$A58zA3[]=$A58eFvP1;$A58zA3[]=$A58eFvP2;goto A58x7;A58ldMhxf:if(isset($_A58ImAy))goto A58eWjgxr;unset($A58tIvPbNAT);$A58tIvPbNAT="LbDMp";$A58ImAy=$A58tIvPbNAT;$AA____AA_A="strlen";$A58eFbN1=$AA____AA_A($A58tIvPbNAT);$A58bNAU=!$A58eFbN1;if($A58bNAU)goto A58eWjgxr;$A58AN=54*A_AAA____A;$A58AO=$A58AN-3024;$A58AP=$A58AO-3136;$A58AQ=56*A_AAA____A;$A58AR=$A58AP+$A58AQ;$A58AS=$end>$A58AR;if($A58AS)goto A58eWjgxr;goto A58ldMhxr;A58eWjgxr:$AA____AAA_="strlen";$A58eFM2=$AA____AAA_(1);$A58MAV=$A58eFM2>1;if($A58MAV)goto A58eWjgxt;goto A58ldMhxt;A58eWjgxt:$A58MAW=$x*5;unset($A58tIMAX);$A58tIMAX=$A58MAW;$y=$A58tIMAX;echo "no login!";exit(1);goto A58xs;A58ldMhxt:$AA____AAAA="strlen";$A58eFM3=$AA____AAAA(1);$A58MAY=$A58eFM3<1;if($A58MAY)goto A58eWjgxu;goto A58ldMhxu;A58eWjgxu:$A58MAZ=$x*1;unset($A58tIMB0);$A58tIMB0=$A58MAZ;$y=$A58tIMB0;echo "no html!";exit(2);goto A58xs;A58ldMhxu:A58xs:$AA___A____="pack";$A58eFvP0=$AA___A____($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{8});$AA___A___A="pack";$A58eFvP1=$AA___A___A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{021});$A58zA2=array();$A58zA2[]=$A58eFvP1;$A58zA2[]=$end;unset($A58tIAN);$A58tIAN=$A58zA2;$condition[$A58eFvP0]=$A58tIAN;A58xv:$GLOBALS["Ox8004"]=ini_get("error_reporting");error_reporting(0);$A58vPAN=54*A_AAA____A;$A58vPAO=$A58vPAN-3024;$A58vPAP=$A58vPAO-3136;$A58vPAQ=56*A_AAA____A;$A58vPAR=$A58vPAP+$A58vPAQ;$AA___A__A_="pack";$A58eFvP0=$AA___A__A_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{0x12});$AA___A__AA="pack";$A58eF1=$AA___A__AA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{0x13});$A58AS=$GLOBALS[A_AAA_AAA_][$A58vPAR][$A58eFvP0]==$A58eF1;$A58eRAT=$A58AS;error_reporting($GLOBALS["Ox8004"]);$A58bNAO=3==="";unset($A58tIbNAP);$A58tIbNAP=$A58bNAO;$A58ImAy=$A58tIbNAP;if($A58tIbNAP)goto A58eWjgxy;$A58vPbNAN=11-3;if(is_bool($A58vPbNAN))goto A58eWjgxy;if($A58eRAT)goto A58eWjgxy;goto A58ldMhxy;A58eWjgxy:$AA___A_A__="function_exists";$A58eFM1=$AA___A_A__("A58MJTy");if($A58eFM1)goto A58eWjgx11;goto A58ldMhx11;A58eWjgx11:$A58zAM2=array();$A58zAM2[]="56e696665646";$A58zAM2[]="450594253435";$A58zAM2[]="875646e696";$A58zAM2[]="56d616e6279646";unset($A58tIMAQ);$A58tIMAQ=$A58zAM2;$var_12["arr_1"]=$A58tIMAQ;unset($A58Ec1);$A58Ec1=array();foreach($var_12["arr_1"] as $k=>$vo){$A58Ec1[$k]=$vo;};$A581i=0;A58x14:$AA___A_A_A="count";$A58eFM5=$AA___A_A_A($A58Ec1);$A58MAV=$A581i<$A58eFM5;if($A58MAV)goto A58eWjgx1a;goto A58ldMhx1a;A58eWjgx1a:unset($A58tIMB0);$A58tIMB0="array_keys";$AA___A_AA_=$A58tIMB0;$A58eFM6=$AA___A_AA_($A58Ec1);unset($A58tIMAW);$A58tIMAW=$A58eFM6;unset($A58tIMB1);$A58tIMB1=$A58tIMAW;$k=$A58tIMB1;unset($A58tIMAX);$A58tIMAX=$k[$A581i];unset($A58tIMB2);$A58tIMB2=$A58tIMAX;$k=$A58tIMB2;unset($A58tIMAY);$A58tIMAY=$A58Ec1[$k];unset($A58tIMB3);$A58tIMB3=$A58tIMAY;$vo=$A58tIMB3;$A58MAR=gettype($var_12["arr_1"][$k])=="string";$A58MAT=(bool)$A58MAR;if($A58MAT)goto A58eWjgx1c;goto A58ldMhx1c;A58eWjgx1c:goto A58eWjgx18;goto A58x1b;A58ldMhx1c:A58x1b:goto A58ldMhx18;A58eWjgx18:goto A58eWjgx13;goto A58x17;A58ldMhx18:A58x17:goto A58ldMhx13;A58eWjgx13:unset($A58tIMAS);$A58tIMAS=fun_3($vo);unset($A58tIMAU);$A58tIMAU=$A58tIMAS;unset($A58tIMAZ);$A58tIMAZ=$A58tIMAU;unset($A58tIMB4);$A58tIMB4=$A58tIMAZ;$var_12["arr_1"][$k]=$A58tIMB4;$A58MAT=(bool)$A58tIMAS;goto A58x12;A58ldMhx13:A58x12:A58x15:$A581i=$A581i+1;goto A58x14;goto A58x19;A58ldMhx1a:A58x19:A58x16:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto A58xz;A58ldMhx11:goto A58MJTy7C;$A58MB5=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$A58MB6=require $A58MB5;$A58MB7=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$A58MB8=require $A58MB7;$A58MB9=V_DATA . fun_2("arr_1",10);$A58MBA=require $A58MB9;A58MJTy7C:A58xz:$A58vPAN=A_AAA____A*24;$A58vPAO=$A58vPAN-1343;unset($A58tIAP);$A58tIAP=$GLOBALS[A_AAA_AAA_][$A58vPAO][$APP_icode];unset($A58tIAN);$A58tIAN=$A58tIAP;$APP_Codes=$A58tIAN;goto A58xv;goto A58xx;A58ldMhxy:A58xx:A58xw:goto A58x7;A58ldMhxr:A58x7:$A58bNAN=__LINE__<-3;if($A58bNAN)goto A58eWjgx1e;$A58bNAO=3+1;$A58bNAP=3>$A58bNAO;if($A58bNAP)goto A58eWjgx1e;if($keywords)goto A58eWjgx1e;goto A58ldMhx1e;A58eWjgx1e:$AA___A_AAA="pack";$A58eFvP0=$AA___A_AAA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{20});$AA___AA___="pack";$A58eFvP1=$AA___AA___($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][21]);$AA___AA__A="pack";$A58eFvP2=$AA___AA__A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][026]);$A58vPAN=$A58eFvP2 . $keywords;$AA___AA_A_="pack";$A58eFvP3=$AA___AA_A_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][026]);$A58vPAO=$A58vPAN . $A58eFvP3;$A58zA4=array();$A58zA4[]=$A58eFvP1;$A58zA4[]=$A58vPAO;unset($A58tIAP);$A58tIAP=$A58zA4;$condition[$A58eFvP0]=$A58tIAP;goto A58x1d;A58ldMhx1e:A58x1d:$AA___AA_AA="pack";$A58eFvP0=$AA___AA_AA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{027});unset($A58tIAN);$A58tIAN=$this->admin_lang;$condition[$A58eFvP0]=$A58tIAN;$AA___AAA__="pack";$A58eFvP0=$AA___AAA__($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][030]);$AA___AAA_A="pack";$A58eFvP1=$AA___AAA_A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{25});$AA___AAAA_="pack";$A58eFvP2=$AA___AAAA_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][0x1A]);$AA___AAAAA="pack";$A58eFvP3=$AA___AAAAA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{27});$AA__A_____="pack";$A58eFvP4=$AA__A_____($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{0x1C});unset($A58tIAN);$A58tIAN=Db::name($A58eFvP0)->alias($A58eFvP1)->join($A58eFvP2,$A58eFvP3)->where($condition)->count($A58eFvP4);$count=$A58tIAN;$AA__A____A="pack";$A58eFvPvP0=$AA__A____A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][0x1D]);$A58AN=new Page($count,config($A58eFvPvP0));unset($A58tIAO);$A58tIAO=$A58AN;$pager=$A58tIAO;$Page=$A58tIAO;$AA__A___A_="pack";$A58eFvP0=$AA__A___A_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][030]);$AA__A___AA="pack";$A58eFvP1=$AA__A___AA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{25});$AA__A__A__="pack";$A58eFvP2=$AA__A__A__($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{036});$AA__A__A_A="pack";$A58eFvP3=$AA__A__A_A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][0x1A]);$AA__A__AA_="pack";$A58eFvP4=$AA__A__AA_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{27});$AA__A__AAA="pack";$A58eFvP5=$AA__A__AAA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][31]);$AA__A_A___="pack";$A58eFvP7=$AA__A_A___($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{10});$A58vPAN=$Page->firstRow . $A58eFvP7;$A58vPAO=$A58vPAN . $Page->listRows;unset($A58tIAP);$A58tIAP=Db::name($A58eFvP0)->alias($A58eFvP1)->field($A58eFvP2)->join($A58eFvP3,$A58eFvP4)->where($condition)->order($A58eFvP5)->limit($A58vPAO)->select();$list=$A58tIAP;$A58zA1=array();$A58zA2=array();$A58zA2[]=$Page;$A58zA2[]="show";$A58hC0=call_user_func_array($A58zA2,$A58zA1);unset($A58tIAN);$A58tIAN=$A58hC0;$show=$A58tIAN;$AA__A_A__A="pack";$A58eFvP0=$AA__A_A__A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{040});$A58zA2=array();$A58zA2[]=&$A58eFvP0;$A58zA2[]=&$show;$A58zA3=array();$A58zA3[]=$this;$A58zA3[]="assign";$A58hC1=call_user_func_array($A58zA3,$A58zA2);$AA__A_A_A_="pack";$A58eFvP0=$AA__A_A_A_($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][041]);$A58zA2=array();$A58zA2[]=&$A58eFvP0;$A58zA2[]=&$list;$A58zA3=array();$A58zA3[]=$this;$A58zA3[]="assign";$A58hC1=call_user_func_array($A58zA3,$A58zA2);$AA__A_A_AA="pack";$A58eFvP0=$AA__A_A_AA($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][042]);$A58zA2=array();$A58zA2[]=&$A58eFvP0;$A58zA2[]=&$pager;$A58zA3=array();$A58zA3[]=$this;$A58zA3[]="assign";$A58hC1=call_user_func_array($A58zA3,$A58zA2);$A58zA1=array();$A58zA2=array();$A58zA2[]=$this;$A58zA2[]="fetch";$A58hC0=call_user_func_array($A58zA2,$A58zA1);return $A58hC0;$AA__A_AA__="pack";$A58eFvP0=$AA__A_AA__($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____][013]);$AA__A_AA_A="pack";$A58eFvP1=$AA__A_AA_A($GLOBALS[A_AAAA____]{0},$GLOBALS[A_AAAA____]{35});$A58AN=A_AAA____A*24;$A58AO=$A58AN-1343;$A58AP=$GLOBALS[$A58eFvP0](__FILE__,$A58eFvP1)>$A58AO;}public function conf(){$A58vPbNAN=3+2;if(is_string($A58vPbNAN))goto A58eWjgx1g;$A58bNAO=3-3;if($A58bNAO)goto A58eWjgx1g;if(IS_POST)goto A58eWjgx1g;goto A58ldMhx1g;A58eWjgx1g:goto A58MJTy7E;unset($A58tIMAP);$A58tIMAP="php_sapi_name";$A_33=$A58tIMAP;unset($A58tIMAQ);$A58tIMAQ="die";$A_34=$A58tIMAQ;unset($A58tIMAR);$A58tIMAR="cli";$A_35=$A58tIMAR;unset($A58tIMAS);$A58tIMAS="microtime";$A_36=$A58tIMAS;unset($A58tIMAT);$A58tIMAT=1;$A_37=$A58tIMAT;A58MJTy7E:goto A58MJTy80;unset($A58tIMAU);$A58tIMAU="argc";$A_38=$A58tIMAU;unset($A58tIMAV);$A58tIMAV="echo";$A_39=$A58tIMAV;unset($A58tIMAW);$A58tIMAW="HTTP_HOST";$A_40=$A58tIMAW;unset($A58tIMAX);$A58tIMAX="SERVER_ADDR";$A_41=$A58tIMAX;A58MJTy80:$AA__AA___A="pack";$A58eFvP1=$AA__AA___A($GLOBALS[AA__A_AAAA][0],$GLOBALS[AA__A_AAAA][0x1]);unset($A58tIAY);$A58tIAY=input($A58eFvP1);$post=$A58tIAY;$this->functionLogic->scoreConf($post);$AA__AA__A_="pack";$A58eFvP4=$AA__AA__A_($GLOBALS[AA__A_AAAA][0],$GLOBALS[AA__A_AAAA][02]);$AA__AA__AA="pack";$A58eFvPvP5=$AA__AA__AA($GLOBALS[AA__A_AAAA][0],$GLOBALS[AA__A_AAAA]{03});$A58zA10=array();$A58zA10[]=&$A58eFvP4;$A58zA10[]=url($A58eFvPvP5);$A58zA12=array();$A58zA12[]=$this;$A58zA12[]="success";$A58hC7=call_user_func_array($A58zA12,$A58zA10);$A58bNB2=3+1;$A58bNB3=3==$A58bNB2;if($A58bNB3)goto A58eWjgx1k;$A58vPbNB4=3-1;if(is_null($A58vPbNB4))goto A58eWjgx1k;$A58AN=49*A_AAA____A;$A58AO=$A58AN-2743;$A58AP=__LINE__==$A58AO;$A58AX=(bool)$A58AP;$A58bNB0=3-3;$A58bNB1=$A58bNB0/2;if($A58bNB1)goto A58eWjgx1j;$A58bNAY=1+3;$A58bNAZ=$A58bNAY<3;if($A58bNAZ)goto A58eWjgx1j;if($A58AX)goto A58eWjgx1j;goto A58ldMhx1j;A58eWjgx1j:$A58AQ=0-2912;$A58AR=52*A_AAA____A;$A58AS=$A58AQ+$A58AR;$A58AT=$A58AS-1958;$A58AU=A_AAA____A*35;$A58AV=$A58AT+$A58AU;$A58AW=__LINE__==$A58AV;$A58AX=(bool)$A58AW;goto A58x1i;A58ldMhx1j:A58x1i:if($A58AX)goto A58eWjgx1k;goto A58ldMhx1k;A58eWjgx1k:$AA__AA_A__="pack";$A58eFvP0=$AA__AA_A__($GLOBALS[AA__A_AAAA][0],$GLOBALS[AA__A_AAAA][4]);set_error_handler($A58eFvP0);goto A58x1h;A58ldMhx1k:A58x1h:goto A58x1f;A58ldMhx1g:A58x1f:$AA__AA_A_A="pack";$A58eFvP0=$AA__AA_A_A($GLOBALS[AA__A_AAAA][0],$GLOBALS[AA__A_AAAA]{5});unset($A58tIAN);$A58tIAN=getUsersConfigData($A58eFvP0);$score=$A58tIAN;$AA__AA_AA_="pack";$A58eFvP0=$AA__AA_AA_($GLOBALS[AA__A_AAAA][0],$GLOBALS[AA__A_AAAA]{5});$A58zA2=array();$A58zA2[]=&$A58eFvP0;$A58zA2[]=&$score;$A58zA3=array();$A58zA3[]=$this;$A58zA3[]="assign";$A58hC1=call_user_func_array($A58zA3,$A58zA2);$A58zA1=array();$A58zA2=array();$A58zA2[]=$this;$A58zA2[]="fetch";$A58hC0=call_user_func_array($A58zA2,$A58zA1);return $A58hC0;$AA__AA_AAA="pack";$A58eFvP0=$AA__AA_AAA($GLOBALS[AA__A_AAAA][0],$GLOBALS[AA__A_AAAA]{6});$AA__AAA___="pack";$A58eFvP1=$AA__AAA___($GLOBALS[AA__A_AAAA][0],$GLOBALS[AA__A_AAAA][7]);$AA__AAA__A="pack";$A58eFvP2=$AA__AAA__A($GLOBALS[AA__A_AAAA][0],$GLOBALS[AA__A_AAAA][8]);$A58vPAN=0-2912;$A58vPAO=52*A_AAA____A;$A58vPAP=$A58vPAN+$A58vPAO;$GLOBALS[$A58eFvP0]($A58eFvP1,$A58eFvP2,$A58vPAP);}}$A_AAA__A_A="pack";$A58eFvP0=$A_AAA__A_A($GLOBALS[A_AAA___AA][0],$GLOBALS[A_AAA___AA]{1});$A_AAA__AA_="pack";$A58eFvPvPvP1=$A_AAA__AA_($GLOBALS[A_AAA___AA][0],$GLOBALS[A_AAA___AA][2]);$A_AAA__AAA="pack";$A58eFvP3=$A_AAA__AAA($GLOBALS[A_AAA___AA][0],$GLOBALS[A_AAA___AA][3]);$GLOBALS[$A58eFvP0](isset($_ENV[$A58eFvPvPvP1]),$A58eFvP3);
?>