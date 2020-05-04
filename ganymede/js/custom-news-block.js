// Get registerBlockType() from wp.blocks in the global scope
const { registerBlockType } = wp.blocks;

registerBlockType('ganymede/custom-news', {

  //built-in attributes
  title: 'Custom News Block',

  description: 'Subpage block with image and text sample',

  icon: 'format-image',

  category: 'layout',

  //custom attributes

  attributes: {},

  //custom functions


  //built-in functions
  edit() {

    return <div>Hello World</div>;

  },

  save() {}

});