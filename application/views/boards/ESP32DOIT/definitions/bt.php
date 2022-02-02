<script>

Blockly.Blocks['bluetooth_begin'] = {
  init: function() {
    this.appendValueInput("name")
        .setCheck("String")
        .appendField("SerialBT.begin");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_available'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("SerialBT.available");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_read'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("SerialBT.read");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_write'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck("Number")
        .appendField("SerialBT.write");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_println'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck(null)
        .appendField("SerialBT.println");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bt_allow_accept_string'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("SerialBT.allowString");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_read_string'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("SerialBT.readString");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>