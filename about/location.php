<body>
    <!--start nav.html-->
    <?php $this->load->view($this->lang.'/include/nav.php');?>
    <!--end nav.html-->
    <!--start header.html-->
    <?php $this->load->view($this->lang.'/include/header.php');?>
    <!--end header.html-->
    <div class="page">
        <div class="banner middle" id="ban-about"><span><h1><?=$this->hearder_about?></h1></span></div>
        <!--start nav-about.html-->
        <?php $this->load->view($this->lang.'/include/nav-about.php');?>
        <!--end nav-about.html-->
       <div class="wrap-fs about">

         <?php
         //EDIT、多張大圖
         foreach($locationEdit as $value):
         ?>
             <?php if($value['xsubtitle']!="" || ($value['xshow']=='yes' && $value['xtitle']!="")){ ?>
             <div class="wrap-fs edit">
                <div class="wrap-s">
                  <?php if($value['xshow']=='yes'){ ?>
                      <h4><?=$value['xtitle']?></h4>
                  <?php } ?>
                  <?php if($value['xsubtitle']){ ?>
                    <p><?=str_replace("\r\n","<BR>",stripslashes($value['xsubtitle']))?></p>
                  <?php } ?>
                </div>
             </div>
             <?php } ?>
             <?php if($value["xcontent"]!=""){ ?>
             <div class="wrap-fs edit">
              <?=$value["xcontent"]?>
             </div>
             <?php } ?>
           <?
               //多張小圖
               foreach($value['albumLlist'] as $valueAlbum):
                $xfile1=$this->front->getalbumpath('fieldalbum_size','xalbum1',$valueAlbum['xfile1'],'',true,'original',true);

                $arrayList1[0]="564";
                $arrayList1[1]="534";
                $xfile1=$this->front->ckeckfilepath($xfile1); // 圖片處理:測試是否有檔案存在
                if($xfile1){ // 抓得到檔案才會有下列資訊
                  $GetSize = $this->front->getsize($xfile1); // 圖片處理:取得圖片資訊
                  $arrayList1[0]=$GetSize['fileW'];
                  $arrayList1[1]=$GetSize['fileH'];
                }


                //多張小圖主標判斷
                $strXtitle=$valueAlbum['xtitle'];
                if($valueAlbum['xfile1'] && $valueAlbum['xtitle']){
                  if(strpos($valueAlbum['xfile1'],$valueAlbum['xtitle'])>-1) $strXtitle= '';
                }
           ?>
                   <div class="wrap-s pics">
                       <figure><a href="<?=$xfile1?>" data-size="<?=$arrayList1[0]?>x<?=$arrayList1[1]?>"><img class="edpic-big" src="<?=$xfile1?>" alt="<?=str_replace("\r\n","<BR>",stripslashes($valueAlbum['xdesc']))?>"></a>
                           <figcaption itemprop="<?=str_replace("\r\n","<BR>",stripslashes($valueAlbum['xdesc']))?>"><?=$strXtitle?></figcaption>
                       </figure>
                   </div>
           <?php
               endforeach;
           endforeach;
           ?>
        <!-- <div class="wrap-fs edit">
            <div class="wrap-s">
                <h4>機械鑽孔 ( Mechanical Drilling )</h4>
                <p>為強化公司治理，並健全董事、監察人及經理人薪資報酬制度，尖點於2011年成立薪資報酬委員會，由獨立董事擔任委員，以協助董事會評估公司董事、監察人及經理人薪酬水準與公司經營績效之連結。董監事薪酬依公司章程規定，為當年度稅後淨利3%以下，並以現金發放；經理人之薪酬則每年依據內外部經營環境訂定目標，再參考當年度績效表現，由薪資報酬委員會審核，提報董事會通過執行。2016年度共召開三次薪酬委員會，委員出席率為100%，主要議案為審查2015年度董監酬勞及經理人員工分紅分配案、審查經理人年終獎金發放準則、制訂2017年度工作計劃等事項。</p>
            </div>
        </div>

        <div class="wrap-s pics">
            <figure><a href="assets/img/demo/investor/calendar.png" data-size="564x534"><img class="edpic-big" src="assets/img/demo/investor/calendar.png" alt="Image description"></a>
                <figcaption itemprop="caption description">Image 名稱</figcaption>
            </figure>
        </div> -->
        </div>
        <!--start footer.html-->
        <?php $this->load->view($this->lang.'/include/footer.php');?>
    </div>
    <!--start loading.html-->
    <?php $this->load->view($this->lang.'/include/loading.php');?>
    <!--end loading.html-->
    <!--start dom.html-->
    <!--Root element of PhotoSwipe. Must have class pswp.-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <!--Background of PhotoSwipe.
 It's a separate element as animating opacity is faster than rgba().-->
        <div class="pswp__bg"></div>
        <!--Slides wrapper with overflow:hidden.-->
        <div class="pswp__scroll-wrap">
            <!--Container that holds slides.
 PhotoSwipe keeps only 3 of them in the DOM to save memory.
 Don't modify these 3 pswp__item elements, data is added later on.-->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <!--Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <!--Controls are self-explanatory. Order can be changed.-->
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <!--Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR-->
                    <!--element will get class pswp__preloader--active when preloader is running-->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!--end dom.html-->
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/photoswipe.min.js"></script>
</body>

</html>
