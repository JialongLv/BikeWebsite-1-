<?php
namespace app\index\controller;
use think\Controller;
class Common extends Controller
{
    public function _initialize()
    {

         if(input('cateid')){
            $this->getPos(input('cateid'));
        }
        if(input('artid')){
            $articles=db('article')->field('cateid')->find(input('artid'));
            $cateid=$articles['cateid'];
            $this->getPos($cateid);
        }

        $this->getConf();
        $this->getNavCates();

        $cateM=new \app\index\model\Cate();
        $recBottom=$cateM->getRecBottom();
        $this->assign('recBottom',$recBottom);
        
    }

        public function getNavCates(){
        $cateres=db('cate')->where(array('pid'=>0))->select();
       
        foreach ($cateres as $k => $v) {
            $children=db('cate')->where(array('pid'=>$v['id']))->select();
            
            if($children){
                $cateres[$k]['children']=$children;

            }else{
                $cateres[$k]['children']=0;
            }

        }
       
        $this->assign('cateres',$cateres);
    }

     public function getConf(){
        $conf=new \app\index\model\Conf();
        $_confres=$conf->getAllConf();
        $confres=array();
        foreach ($_confres as $k => $v) {
            $confres[$v['enname']]=$v['cnname'];
        }
        $this->assign('confres',$confres);
    }

     public function getPos($cateid){
        $cate= new \app\index\model\Cate();
        $posArr=$cate->getparents($cateid);
        // dump($posArr); die;
        $this->assign('posArr',$posArr);
    }

    

}


