<?php 
class tagcloud extends WP_Widget {

	function __construct()
	{
		$widget_ops = array('classname'=>'tagcloud','description' =>'输出一个自动调用的标签云菜单');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::__construct($id_base="tagcloud",$name='标签云',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
         $title= esc_attr($instance['title']);
		 $title2= esc_attr($instance['title2']);

	     $tagcloud = esc_attr($instance['tagcloud']);
	    
		
	     $bac_color=esc_attr($instance['bac_color']);
		 $bac_imgage=esc_attr($instance['bac_imgage']);
		 $detects=esc_attr($instance['detects']);
		 $titleseo= esc_attr($instance['titleseo']);
		 $text_color=esc_attr($instance['text_color']);
		 $seo_out1=esc_attr($instance['seo_out1']);
		 $fixed=esc_attr($instance['fixed']);  
	?>

<br />
<p>
 <label  for="<?php echo $this->get_field_id('title'); ?>">标题:</label><br />
 <input type="text" size="40" value="<?php echo $title ; ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"/>
 
</p>
<p>
 <label  for="<?php echo $this->get_field_id('title2'); ?>">副标题:</label><br />
 <input type="text" size="40" value="<?php echo $title2 ; ?>" name="<?php echo $this->get_field_name('title2'); ?>" id="<?php echo $this->get_field_id('title2'); ?>"/>
 
</p>



<b>seo标签设置</b><br />
   
    <label  for="<?php echo $this->get_field_id('titleseo'); ?>">模块标题seo标签</label><br />
             <select id="<?php echo $this->get_field_id('titleseo'); ?>" name="<?php echo $this->get_field_name('titleseo'); ?>" >
              <option value=''<?php if ($titleseo == "" ) {echo "selected='selected'";}?> > div标签</option>
              <option value='h2'<?php if ($titleseo == "h2" ) {echo "selected='selected'";}?> > 	H2标签</option>
              <option value='h3'<?php if ($titleseo == "h3" ) {echo "selected='selected'";}?> > H3标签</option>
               <option value='h4'<?php if ($titleseo == "h4" ) {echo "selected='selected'";}?> > H4标签</option>
                  <option value='h5'<?php if ($titleseo == "h5" ) {echo "selected='selected'";}?> > H5标签</option>
                <option value='strong'<?php if ($titleseo == "strong" ) {echo "selected='selected'";}?> > strong标签</option>
	          
	</select>

</p>
 <p>
 <label  for="<?php echo $this->get_field_id('seo_out1'); ?>">外层标签使用section</label>
 <input type="checkbox" <?php if($seo_out1=="yes"){echo 'checked="checked"';} ?>size="40" value="yes" name="<?php echo $this->get_field_name('seo_out1'); ?>" id="<?php echo $this->get_field_id('seo_out1'); ?>"/>
 </p>




 
 


 

<p>
<label for="<?php echo $this->get_field_id('detects'); ?>">设备识别</label>
			<select id="<?php echo $this->get_field_id('detects'); ?>" name="<?php echo $this->get_field_name('detects'); ?>">
				<option <?php if($detects==''){echo 'selected="selected"';} ?>value="">移动端和PC端都显示</option>
                <option <?php if($detects=='PcOnly'){echo 'selected="selected"';} ?>value="PcOnly">只显示在PC端</option>
                <option <?php if($detects=='MovePnly'){echo 'selected="selected"';} ?> value="MovePnly">只显示在移动端</option>

</select>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">通过这个选项，你可以让某些模块只显示在某一个设备类型上，或者都显示，你可以在自定义--初始化中，设置输出的技术规则，响应式适配或者是代码适配</em>
</p>



<p>
 <label  for="<?php echo $this->get_field_id('fixed'); ?>">滚动到底部悬浮</label>
 <input type="checkbox" <?php if($fixed=="xf_div_box"){echo 'checked="checked"';} ?>size="40" value="xf_div_box" name="<?php echo $this->get_field_name('fixed'); ?>" id="<?php echo $this->get_field_id('fixed'); ?>"/>
 </p>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">侧栏可设置滚动超出悬浮,勾选这个选项模块顺序将会沉降到最后，请勿设置太多内容，否则显示不全</em>


 

<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
	   
	    $bac_imgages=$text_color=$detects2='';
        $tagcloud = apply_filters('tagcloud', empty($instance['tagcloud']) ? __('') : $instance['tagcloud']);
		$speed=apply_filters('speed', empty($instance['speed']) ? __('') : $instance['speed']);
	    $bac_color=apply_filters('bac_color', empty($instance['bac_color']) ? __('') : $instance['bac_color']);
		$title=apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
		$title2=apply_filters('title2', empty($instance['title2']) ? __('') : $instance['title2']);
		
		$detects=apply_filters('detects', empty($instance['detects']) ? __('') : $instance['detects']);
	 
		$seo_out1=apply_filters('seo_out1', empty($instance['seo_out1']) ? __('') : $instance['seo_out1']);
		$titleseo=apply_filters('seo_out1', empty($instance['titleseo']) ? __('') : $instance['titleseo']);
        $fixed=apply_filters('fixed', empty($instance['fixed']) ? __('0') : $instance['fixed']);
		
		 if($detects){$detects2= 'id="'.$detects.'"';}
		 
		?>
<?php if($seo_out1){echo '<section class=" index_tagclouds '.$detects.' '.$fixed.' '.$text_color.' " '.$detects2.'>';}else{echo ' <div class=" index_tagclouds '.$detects.' '.$fixed.' '.$text_color.' " '.$detects2.'>';} ?>    

<div class="modle_box_title">

	<?php if($title||$title2){ ?>
<div  class="list_nav_title">
	<?php if($titleseo){echo '<'.$titleseo.'  class="list_nav_ts">';}else{echo '<div  class="list_nav_ts">';} ?>
	
	<?php if($title) {echo '<font>'.$title.'</font>' ;} if($title2) {echo $title2 ;} ?> <i class="fas fa-align-left"></i>
	<?php if($titleseo){echo '</'.$titleseo.'>';}else{echo '</div>';} ?>

		<div class="xian_o"><div class="xo"></div></div>
	
</div>	
<?php } ?>

</div>
<div class="index_tagcloud">
<?php  wp_tag_cloud('smallest=12&largest=16&number=50&orderby=count');; ?>
</div>

<?php if($seo_out1){echo '</section>';}else{echo '</div>';} 
		

	}
}
register_widget('tagcloud');
