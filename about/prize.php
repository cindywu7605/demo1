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
        <div class="wrap-s prize">
           <?php
             foreach($prizeCaty as $value):
           ?>
           <div class="year">
               <div class="row">
                   <div class="col-12 col-md-2">
                       <h4><?=$value["xname"]?></h4>
                   </div>
                   <div class="ydes col-12 col-md-10">
                       <ul>
                            <?php
                             //底層列表
                             $sql="select A.*  from ".$this->tb_about_glory_app." as A inner join ".$this->tb_about_glory_rel." as R on A.pid=R.fappid inner join ".$this->tb_about_glory_caty." as C on R.ftypepid=C.pid   where A.xpublish='yes' and C.xpublish='yes' and  R.ftypepid=".$value["pid"]."  order by R.xsort asc";
                             $query = $this->db->query($sql);
                             $prizeApp=$this->admin_crud->result_array($query);

                              foreach($prizeApp as $valueApp):
                            ?>
                              <li><?=$valueApp["xtitle"]?></li>
                           <?php endforeach;?>
                       </ul>
                   </div>
               </div>
           </div>
           <?php
             endforeach;
           ?>

            <!-- <div class="year">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <h4>2017</h4>
                    </div>
                    <div class="ydes col-12 col-md-10">
                        <ul>
                            <li>獲頒衛福部「健康職場認證-健康啟動標章」</li>
                            <li>上海尖點獲得上海市「高新技術企業」認定</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="year">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <h4>2016</h4>
                    </div>
                    <div class="ydes col-12 col-md-10">
                        <ul>
                            <li>獲頒衛福部「健康職場認證-健康啟動標章」獲頒衛福部「健康職場認證-健康啟動標章」獲頒衛福部「健康職場認證-健康啟動標章」</li>
                            <li>上海尖點獲得上海市「高新技術企業」認定</li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
        <!--start footer.html-->
        <?php $this->load->view($this->lang.'/include/footer.php');?>
    </div>
    <!--start loading.html-->
    <div class="load"></div>
    <!--end loading.html-->
    <script src="assets/js/main.min.js"></script>
</body>

</html>
