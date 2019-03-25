<template>
  <div>
    <vue-ckeditor v-model="content" :config="config"/>
  </div>
</template>
<script>
import VueCkeditor from "vue-ckeditor2";

export default {
  components: { VueCkeditor },
  data() {
    return {
      content: "",
      config: {
        toolbar: [
          ["Bold", "Italic", "Underline", "Strike", "Subscript", "Superscript"]
        ],
        height: 200
      }
    };
  },
  methods: {
    onBlur(evt) {
      console.log(evt);
    },
    onFocus(evt) {
      console.log(evt);
    },
    onContentDom(evt) {
      console.log(evt);
    },
    onDialogDefinition(evt) {
      console.log(evt);
    },
    onFileUploadRequest(evt) {
      console.log(evt);
    },
    onFileUploadResponse(evt) {
      console.log(evt);
    }
  }
};
</script>