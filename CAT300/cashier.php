<script type="text/javascript"><!--
function updatesum() {
document.form.sum.value = (document.form.sum1.value -0) + (document.form.sum2.value -0);
}
//--></script>

<body>

<form name="form" >
Enter a number:
<input name="sum1" onChange="updatesum()" />
and another number:
<input name="sum2" onChange="updatesum()" />
Their sum is:
<input name="sum" readonly style="border:0px;">
</form>

</body>