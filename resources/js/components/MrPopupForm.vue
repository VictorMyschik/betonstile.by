<template>
  <span class="mr-middle">
    <span v-if="showModal">
      <transition name="modal fade">
        <div class="modal-mask">
          <div class="modal-wrapper">
            <div class="modal-dialog mw-100" :class="form_data['#size']" role="document">
              <div class="modal-content">
                <div class="p-b-25 modal-header shadow btn-panel"
                     style="height: 30px; border-radius: 0; border-color: #a34701">
                  <h6 class=" mr-bold">{{ title }}</h6>
                  <button type="button" class="mr-btn-primary fa fa-window-close" @click="showModal = false"
                          data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="#" method="post" v-on:submit.prevent="MrSave" id="frm">
                    <div class="mr-bold mr-middle" v-if="load_data">Загрузка данных <i
                        class="fa fa-spinner fa-spin"></i></div>
                    <div class="row no-gutters text-danger">
                      <div v-if="mrErrors !== null" class="m-b-15">
                        <h6>Ошибки</h6>
                        <div class="col-md-12" v-for="(msg) in mrErrors">{{ msg }}</div>
                      </div>
                    </div>
                    <v-runtime-template :template="form_html"></v-runtime-template>
                  </form>
                </div>
                <div class="modal-footer justify-content-center" style="height: 45px;">
                  <span v-if="form_data['#btn_info']">
                     <button type="button" @click="hide()" class="mr-btn-primary">Закрыть</button>
                  </span>
                  <span v-else>
                    <button type="button" v-if="!is_wait" @click="MrSave()" class="mr-btn-primary">Сохранить</button>
                    <span v-else><i class="fa fa-spinner fa-spin"></i></span>
                    <button type="button" @click="hide()" class="mr-btn-danger m-l-15">Отменить</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </transition>
    </span>

    <span @click="show()" :class="class_arr" @keyup.esc="hide" v-html="btn_name"></span>
  </span>
</template>

<script>
import VRuntimeTemplate from "v-runtime-template";

export default {
  components: {VRuntimeTemplate},
  name: "MrPopupForm",
  props: [
    'route_url',
    'btn_name',
    'class_arr',
    'need_reload', // нужно ли перезагружать страницу
  ],
  data() {
    return {
      showModal: false,
      form_html: null,
      form_data: [],
      title: '',
      load_data: false,
      mrErrors: null,
      is_wait: false,
    }
  },

  created: function () {
    document.addEventListener('keyup', this.escPress);
  },

  methods: {
    escPress(event) {
      if (event.keyCode === 27) {
       this.hide();
      }
    },

    show() {
      this.GetForm();
      this.showModal = true;
      this.mrErrors = null;
    },
    hide() {
      this.mrErrors = null;
      this.showModal = false
    },

    GetForm: function () {
      this.load_data = true;
      axios.post(this.route_url).then(response => {
            let data = response.data;
            this.form_html = data.html;
            this.form_data = data.form_data;
            this.title = this.form_data['#title'];

            this.load_data = false;
            this.is_wait = false;
          }
      );
    },

    MrSave: function () {
      this.in_data = {};
      this.is_wait = false;
      let myForm = document.getElementById('frm');
      let formData = new FormData(myForm);
      // need to convert it before using not with XMLHttpRequest
      for (let [key, val] of formData.entries()) {
        Object.assign(this.in_data, {[key]: val})
      }

      axios.post(this.form_data['#url'], this.in_data).then(response => {
            if (response.data !== '') {
              this.mrErrors = JSON.parse(response.data.message);
            } else {
              this.hide();
              this.afterSave();
              this.is_wait = false;
            }
          }
      );
    },

    afterSave: function () {
      this.$parent.SendRequest();
      if (this.need_reload === undefined || this.need_reload === true) {
        window.location.reload();
      } else {
        this.$emit('SendRequest', {
          result: this.in_data,
          args: this.form_data,
          url: this.route_url
        });

        this.hide();
      }
    }
  }
}
</script>

<style scoped>

.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  webkit-transform: translate3d(0, 0, 0) !important;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity 0.3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-body {
  overflow-y: auto;
  max-height: 75vh;
}
</style>