<!-- Start footer -->

  </div><!-- End content -->

</div><!-- End page_wrapper -->

<script type="text/javascript">
//<![CDATA[
Droppables.add("cart", {accept:'products', hoverclass:'cart-active', onDrop:function(element){new Ajax.Updater('items', 'add.php', {asynchronous:true, evalScripts:true, parameters:'id=' + encodeURIComponent(element.id)})}})
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
Droppables.add("wastebin", {accept:'cart-items', hoverclass:'wastebin-active', onDrop:function(element){Element.hide(element); new Ajax.Updater('items', 'remove.php', {asynchronous:true, evalScripts:true, parameters:'id=' + encodeURIComponent(element.id)})}})
//]]>
</script>
      
</body>
</html>
