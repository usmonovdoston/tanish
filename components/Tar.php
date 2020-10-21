<?php
	namespace app\components;
	use Yii;
	class Tar
	{
		public static function t($matn){
			return Yii::t('app',$matn);
		}
        public static function str($matn,$count){
            return \yii\helpers\StringHelper::truncate(strip_tags((string) $matn),$count);
        }
		public static function tarjima($matn){
			$kichik = " e,o‘,gʻ,o’,o`,sh,ch,yo’,yo`,yo',yo,ya,yu,ts,o',g',a,b,s,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,t,u,v,x,y,z,i,sh,e,`,',’,,";
			$kichik_kril = " э,ў,ғ,ў,ў,ш,ч,йў,йў,йў,ё,я,ю,ц,ў,ғ,а,б,с,д,е,ф,г,ҳ,и,ж,к,л,м,н,о,п,қ,р,т,у,в,х,й,з,ы,щ,э,ъ,ъ,ъ,ь,";
			$katta = strtoupper($kichik);
			$katta_kril = " Э,Ў,Ғ,Ў,Ў,Ш,Ч,Йў,Йў,Йў,Ё,Я,Ю,Ц,Ў,Ғ,А,Б,С,Д,Е,Ф,Г,Ҳ,И,Ж,К,Л,М,Н,О,П,Қ,Р,Т,У,В,Х,Й,З,Ы,Щ,Э,Ъ,Ъ,Ъ,Ь,";
			$lotin0 = explode(",",$kichik.$katta);
			$krill0 = explode(",",$kichik_kril.$katta_kril);
			$lotin1 = explode(",","“,”,Yo‘,O‘,G‘,O',O`,O’,G',G`,G’,Sh,Ch,Yo,Ya,Yu,Yo’,Yo`,Yo',TS,g`,g’,sh,ch,yo,ya,yu");
			$krill1 = explode(",","    «,»,Йў,Ў,Ғ,Ў,Ў,Ў,Ғ,Ғ,Ғ,Ш,Ч,Ё,Я,Ю,Йў,Йў,Йў,Ц,ғ,ғ,ш,ч,ё,я,ю");
			$lotin = array_merge($lotin1,$lotin0);
			$krill = array_merge($krill1,$krill0);

			return str_replace($lotin,$krill,$matn);
		}
		public static function tarjima_lotinga($matn){
			$kichik = " e,o‘,gʻ,o’,o`,sh,ch,yo’,yo`,yo',yo,ya,yu,ts,o',g',a,b,s,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,t,u,v,x,y,z,i,sh,e,`,',’,,";
			$kichik_kril = " э,ў,ғ,ў,ў,ш,ч,йў,йў,йў,ё,я,ю,ц,ў,ғ,а,б,с,д,е,ф,г,ҳ,и,ж,к,л,м,н,о,п,қ,р,т,у,в,х,й,з,ы,щ,э,ъ,ъ,ъ,ь,";
			$katta = strtoupper($kichik);
			$katta_kril = " Э,Ў,Ғ,Ў,Ў,Ш,Ч,Йў,Йў,Йў,Ё,Я,Ю,Ц,Ў,Ғ,А,Б,С,Д,Е,Ф,Г,Ҳ,И,Ж,К,Л,М,Н,О,П,Қ,Р,Т,У,В,Х,Й,З,Ы,Щ,Э,Ъ,Ъ,Ъ,Ь,";
			$lotin0 = explode(",",$kichik.$katta);
			$krill0 = explode(",",$kichik_kril.$katta_kril);
			$lotin1 = explode(",","“,”,Yo‘,O‘,G‘,O',O`,O’,G',G`,G’,Sh,Ch,Yo,Ya,Yu,Yo’,Yo`,Yo',TS,g`,g’,sh,ch,yo,ya,yu");
			$krill1 = explode(",","    «,»,Йў,Ў,Ғ,Ў,Ў,Ў,Ғ,Ғ,Ғ,Ш,Ч,Ё,Я,Ю,Йў,Йў,Йў,Ц,ғ,ғ,ш,ч,ё,я,ю");
			$lotin = array_merge($lotin1,$lotin0);
			$krill = array_merge($krill1,$krill0);

			return str_replace($krill,$lotin,$matn);
		}
		public static function tar($tar){
			if(Yii::$app->language=="uz-UZk" || Yii::$app->language=="ru-RU"){
				return static::tarjima($tar);
			}
			if(Yii::$app->language=="uz-UZ"){
				return static::tarjima_lotinga($tar);
			}
			return $tar;
		}
		public static function overflow($text,$number){
			$massiv = explode(' ', $text);
			$content = "";
			$n = (count($massiv) >= $number) ? $number : count($massiv);
			$t = (count($massiv) >= $number) ? '...' : '';
			for ($i=0; $i < $n; $i++) { 
				$content .= $massiv[$i]." "; 
			}
			return $content.$t;
		}
        //Url
        public static function url($url){
            return Yii::$app->urlManager->createUrl($url);
        }
        public static function to($url,$id){
            return Yii::$app->urlManager->createUrl(['site/'.$url,'id'=>$id]);
        }
	}