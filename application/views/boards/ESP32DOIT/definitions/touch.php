<script>
Blockly.Blocks['read_touch'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("esp32.readTouch");
    this.setInputsInline(true);
    this.setOutput(true, 'Number');
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>