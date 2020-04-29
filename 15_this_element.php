<input id="abc" type="button" value="Open Button" onClick="change(this);" />

<script type="text/javascript">

function change( tag )
{
    if ( tag.value == "Open Button" ) // If Button is Open currently
        tag.value = "Close Button";
    else // Button is Closed currently
        tag.value = "Open Button";
}
</script>
