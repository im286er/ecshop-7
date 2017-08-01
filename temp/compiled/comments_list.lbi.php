
     
      
<div class="clearfix CommentsList">

	<ul>
    	<?php if ($this->_var['comments']): ?>
    	<?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
    	<li>
        	<table width="100%" border="0" cellpadding="0" cellspacing="0">
            	<tbody>
                	<tr>
                    	<td width="40px" style="vertical-align:top;">评论：</td>
                    	<td width="80%">
                        	<div><span><?php echo $this->_var['comment']['content']; ?></span></div>
							<?php if ($this->_var['comment']['re_content']): ?>
							<div class="ManagerReply"><font class="f1"><?php echo $this->_var['lang']['admin_username']; ?></font><span><?php echo $this->_var['comment']['re_content']; ?></span> <?php echo $this->_var['comment']['add_time']; ?></div>
							<?php endif; ?>
                        </td>
                        <td rowspan="2" align="right"><?php if ($this->_var['comment']['username']): ?><span><?php echo htmlspecialchars($this->_var['comment']['username']); ?></span><?php else: ?><span><?php echo $this->_var['lang']['anonymous']; ?></span><?php endif; ?></td>
                    </tr>
                    <tr>
                    	<td colspan="2"><?php echo $this->_var['comment']['add_time']; ?> <?php echo $this->_var['goods']['goods_attr']; ?> <img src="themes/weipinhui/images/stars<?php echo $this->_var['comment']['rank']; ?>.gif" alt="<?php echo $this->_var['comment']['comment_rank']; ?>" /></td>
                    </tr>
            	</tbody>
            </table>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
        <p class="NoneComments"><?php echo $this->_var['lang']['no_comments']; ?></p>
        <?php endif; ?>
    </ul>
      

<div id="boxOverlay"></div>


<div class="i-zixun" id="commentform">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="aui_border">
	<tr>
        <td class="aui_nw"></td>
        <td class="aui_n"></td>
        <td class="aui_ne"></td>
    </tr>
    <tr>
    	<td class="aui_w"></td>
        <td class="aui_c" style="background:#fff;">
        	<h3><p>发表评论</p><a class="close">×</a></h3>
             <form id="commentForm" name="commentForm" method="post" onsubmit="submitComment(this)" action="javascript:;">
                <table cellspacing="0" cellpadding="0" border="0" style="margin:10px 0 20px;">
                  <tbody><tr class="tr1">
                    <td class="td1">商品满意度：</td>
                    <td>
                      <div class="cmtRank">
                        <span onclick="showrank(this,'1','#Rank','#commentrank')" onmouseover="showrank(this,'1','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                        <span onclick="showrank(this,'2','#Rank','#commentrank')" onmouseover="showrank(this,'2','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                        <span onclick="showrank(this,'3','#Rank','#commentrank')" onmouseover="showrank(this,'3','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                        <span onclick="showrank(this,'4','#Rank','#commentrank')" onmouseover="showrank(this,'4','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                        <span onclick="showrank(this,'5','#Rank','#commentrank')" onmouseover="showrank(this,'5','#Rank')" onmouseout="hiddenrank(this,'#Rank','#commentrank')"></span>
                      </div>
                      <span id="Rank"></span>
                      <span>点击星星就可以评分</span>
                    </td>
                    <input type="hidden" value="" name="comment_rank" id="commentrank">
					<input type="hidden" name="cmt_type" value="<?php echo $this->_var['comment_type']; ?>" />
					<input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
					
                  </tr>
                  <tr><td class="td1">E-mail：</td><td><input type="text" class="inputBorder text2" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" maxlength="100" id="email" name="email"></td></tr>
                  <tr><td class="td1">商品评论：</td><td><textarea onblur="if(this.value=='') this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue) this.value='';" name="content"><?php if ($this->_var['factor'] == 0): ?>所有用户都可以对该商品发表评论<?php elseif ($this->_var['factor'] == 1): ?>只有登陆的用户才可以对该商品发表评论<?php elseif ($this->_var['factor'] == 2): ?>在本站购买过一次其他商品的用户才可以对该商品发表评论<?php elseif ($this->_var['factor'] == 3): ?>购买过此<?php echo $this->_var['goods_name']; ?>的顾客，在收到商品才可以对该商品发表评论<?php endif; ?></textarea></td></tr>
                  
                 
                  <tr>
                    <td class="td2"></td>
                    <td>
                      <table>
                        <tbody><tr>
                          <td>验证码：</td>
                          <td><input type="text" tabindex="0" name="captcha" value="" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" class="text1"></td>
                          <td><img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha"></td>
                          <td><input type="submit" value="发表评论" class="sub"></td>
                        </tr>
                      </tbody></table>
                    </td>
                  </tr>
                </tbody></table>
              </form>
        </td>
        <td class="aui_e"></td>
    </tr>
    <tr>
        <td class="aui_sw"></td>
        <td class="aui_s"></td>
        <td class="aui_se"></td>
    </tr>
</table>
</div>

</div>
    
    <div class="blank5"></div>
  
<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_43951200_1501560550');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_43951200_1501560550']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_43951200_1501560550']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  /*zhou edit start*/
  cmt.rank            = frm.elements['comment_rank'].value ? frm.elements['comment_rank'].value : 0 ;

  if(cmt.rank <= 0)
  {
		alert('请选择评分等级');
		return false;  
  }
  /*zhou edit end*/
/*
  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }
  */
  

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + $.toJSON(cmt), commentResponse, 'POST', 'JSON');
   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
  }

//]]>
</script>