<template>
  <div class="q-my-xl">
    <q-card>
      <q-card-section>Upraviť: {{ prodMeno }}</q-card-section>
      <q-card-section>
        <!--        <q-field :count="500">-->
        <q-input label="Meno" v-model="prodMeno" max-length="100"/>
        <q-select label="Výrobca" v-model="prodMaker" :options="makers" option-value="id" option-label="name"/>

        <q-select label="Hlavná kategória" v-model="prodMainCat" @input="refreshSubCats" :options="maincats"
                  option-value="id" option-label="name"/>

        <q-select label="Pod kategória" v-model="prodSubCat" :options="subcats"
                  option-value="id" option-label="name"/>

        <div id="test"></div>
        <q-input
          type="textarea"
          label="Description"
          v-model="prodPopis"
          :max-height="100"
          rows="7"
        />

        <q-input label="Rám" v-model="prodRam" max-length="100"/>

        <q-select label="Veľkosti"
                  v-model="prodSizes"
                  multiple
                  :options="sizes"
                  option-value="id"
                  option-label="name"/>

        <q-input label="Vidlica" v-model="prodVidlica" max-length="100"/>
        <q-input label="Tlmič" v-model="prodTlmic" max-length="100"/>
        <q-input label="Kolesá" v-model="prodKolesa" max-length="100"/>
        <q-input label="Predný plášť" v-model="prodPrednyPlast" max-length="100"/>
        <q-input label="Zadný plášť" v-model="prodZadnyPlast" max-length="100"/>
        <q-input label="Brzdy" v-model="prodBrzdy" max-length="100"/>
        <q-input label="Kľuky" v-model="prodKluky" max-length="100"/>
        <q-input label="Stredové zloženie" v-model="prodStredove" max-length="100"/>
        <q-input label="Radenie" v-model="prodRadenie" max-length="100"/>
        <q-input label="Prehadzovač" v-model="prodPrehadzovac" max-length="100"/>
        <q-input label="Kazeta" v-model="prodKazeta" max-length="100"/>
        <q-input label="Reťaz" v-model="prodRetaz" max-length="100"/>
        <q-input label="Napinák reťaze" v-model="prodNapinak" max-length="100"/>
        <q-input label="Sedlovka" v-model="prodSedlovka" max-length="100"/>
        <q-input label="Sedlo" v-model="prodSedlo" max-length="100"/>
        <q-input label="Predstavec" v-model="prodPredstavec" max-length="100"/>
        <q-input label="Riadidlá" v-model="prodRiadidla" max-length="100"/>
        <q-input label="Gripy" v-model="prodGripy" max-length="100"/>
        <q-input label="Hlavové" v-model="prodHlavove" max-length="100"/>
        <q-input label="Pedále" v-model="prodPedale" max-length="100"/>
        <q-input label="Váha" v-model="prodVaha" max-length="100"/>
        <q-input label="Farba" v-model="prodFarba" max-length="100"/>
        <q-input label="Extra" v-model="prodExtra" max-length="100"/>
        <q-input label="Cena v €" v-model="prodCena" max-length="100"/>

        <div class="q-pa-md q-gutter-sm">
          <q-btn push color="red" label="Delete image" @click="deleteImage" />

          <q-img
            :src="url"
            spinner-color="white"
            style="height: 500px; max-width: 500px"
            contain
          />
        </div>
                <q-uploader
                  label="Nahrať nový obrázok (a nahradiť starý)"
                  accept=".jpg"
                  auto-expand
                  hide-upload-btn
                  ref = 'uploader'
                  @added = 'fileAction'
                  @removed = 'fileAction'
                  :factory="uploadImage"
                  @uploaded="fileUploaded"
                />
      </q-card-section>
      <q-card-actions class="q-mt-md">
        <div class="row justify-end full-width docs-btn">
          <q-btn label="Cancel" flat to="/products/index"/>
          <q-btn label="Update" color="primary" @click="submit"/>
        </div>
      </q-card-actions>
    </q-card>
  </div>
</template>

<style lang="stylus">
  .docs-btn .q-btn
    padding 15px 20px
</style>
<script>
    import axios from 'axios'
    // const async= require('async');
    import series from 'async/series';

    export default {
        data() {
            return {
                url: '',
                deletedImage: false,
                fileAdded: false,
                prodImageId: '',
                prodMaker: '',
                prodMakerId: '',
                prodSizes: [],
                prodMainCat: '',
                prodSubCat: '',
                prodMainCatId: '',
                prodSubCatId: '',
                prodMeno: '',
                prodRam: '',
                prodVidlica: '',
                prodTlmic: '',
                prodKolesa: '',
                prodPrednyPlast: '',
                prodZadnyPlast: '',
                prodBrzdy: '',
                prodKluky: '',
                prodStredove: '',
                prodRadenie: '',
                prodPrehadzovac: '',
                prodKazeta: '',
                prodRetaz: '',
                prodNapinak: '',
                prodSedlovka: '',
                prodSedlo: '',
                prodPredstavec: '',
                prodRiadidla: '',
                prodGripy: '',
                prodHlavove: '',
                prodPedale: '',
                prodVaha: '',
                prodFarba: '',
                prodExtra: '',
                prodCena: '',
                makers: [],
                sizes: [],
                maincats: [],
                subcats: [],
                prodPopis: '',
            }
        },
        methods: {
            fileAction(){
                if (this.fileAdded === true){
                    this.fileAdded = false;
                }else{
                    this.fileAdded = true;
                }
            },
            uploadImage(files){
                return new Promise(((resolve, reject) => {
                    resolve({
                        fieldName: "image",
                        url: "http://127.0.0.1:8000/api/upload/",
                        formFields: [{name: 'prodId', value:this.prodId}],
                    })
                }))
            },
            fileUploaded({files,xhr}){
                // console.log(JSON.parse(xhr.response).id);
                this.prodImageId = JSON.parse(xhr.response).id;
                this.updateProduct();
                // console.log(`END FILE UPLOADED`);
            },
            getMakers() {
                axios
                    .get(`http://127.0.0.1:8000/api/products/makers/`)
                    .then(({data}) => {
                        // then we update the rows with the fetched ones
                        this.makers = data.rows
                    })
                    .catch(error => {
                        // there's an error... do SOMETHING
                        console.log(error)
                    })
            },
            getSizes() {

                axios
                    .get(`http://127.0.0.1:8000/api/products/sizes/`)
                    .then(({data}) => {
                        // then we update the rows with the fetched ones
                        this.sizes = data.rows
                    })
                    .catch(error => {
                        // there's an error... do SOMETHING
                        console.log(error)
                    })
            },
            getMaincats(){
                    axios
                        .get(`http://127.0.0.1:8000/api/products/maincats/`)
                        .then(({data}) => {
                            // then we update the rows with the fetched ones
                            this.maincats = data.rows
                        })
                        .catch(error => {
                            // there's an error... do SOMETHING
                            console.log(error)
                        })

            },
            getSubCats(maincat_id) {
                    axios
                        .get(`http://127.0.0.1:8000/api/products/subcats/${maincat_id}`)
                        .then(({data}) => {
                            // then we update the rows with the fetched ones
                            this.subcats = data.rows
                        })
                        .catch(error => {
                            // there's an error... do SOMETHING
                            console.log(error)
                        })
            },
            refreshSubCats() {
                console.log(`refresh: ${this.prodMainCat.id}`)
                axios
                    .get(`http://127.0.0.1:8000/api/products/subcats/${this.prodMainCat.id}`)
                    .then(({data}) => {
                        // then we update the rows with the fetched ones
                        this.subcats = data.rows
                    })
                    .catch(error => {
                        // there's an error... do SOMETHING
                        console.log(error)
                    })

            },
            getProduct(){
                    axios
                        .get(`http://127.0.0.1:8000/api/products/` + this.$route.params.id + '/edit')
                        .then(response => {
                            this.prodMeno = response.data.name;
                            this.prodPopis = response.data.popis;
                            this.prodRam = response.data.ram;
                            this.prodVidlica = response.data.vidlica;
                            this.prodTlmic = response.data.tlmic;
                            this.prodKolesa = response.data.kolesa;
                            this.prodPrednyPlast = response.data.predny_plast;
                            this.prodZadnyPlast = response.data.zadny_plast;
                            this.prodBrzdy = response.data.brzdy;
                            this.prodKluky = response.data.kluky;
                            this.prodStredove = response.data.stredove_zlozenie;
                            this.prodRadenie = response.data.radenie;
                            this.prodPrehadzovac = response.data.prehadzovac;
                            this.prodKazeta = response.data.kazeta;
                            this.prodRetaz = response.data.retaz;
                            this.prodNapinak = response.data.napinak_retaze;
                            this.prodSedlovka = response.data.sedlovka;
                            this.prodSedlo = response.data.sedlo;
                            this.prodPredstavec = response.data.predstavec;
                            this.prodRiadidla = response.data.riadidla;
                            this.prodGripy = response.data.gripy;
                            this.prodHlavove = response.data.hlavove_zlozenie;
                            this.prodPedale = response.data.predale;
                            this.prodVaha = response.data.vaha;
                            this.prodFarba = response.data.farba;
                            this.prodMakerId = response.data.vyrobca_id;
                            this.prodMainCatId = response.data.mainCat_id;
                            this.prodSubCatId = response.data.subCat_id;
                            this.prodExtra = response.data.extra;
                            this.prodCena = response.data.cena;
                            this.prodImageId = response.data.image_id;
                            this.prodId = response.data.id;
                            this.url = `http://127.0.0.1:8000/api/image/` + response.data.image_id;
                        })
                        .catch(error => {
                            document.getElementById('test').innerHTML = `error`;
                            this.$q.notify({
                                type: 'negative',
                                timeout: 2000,
                                message: 'Loading product: an error has been occured.'
                            });
                            console.log(error)
                        });
            },
            submit(){
                if (this.fileAdded){
                    //automaticly updates product with image upload
                    this.$refs.uploader.upload()
                }else{
                    this.updateProduct();
                }
            },
            updateProduct() {
                axios
                    .put(`http://127.0.0.1:8000/api/products/` + this.$route.params.id, this.productData)
                    .then(response => {
                        this.$q.notify({type: 'positive', timeout: 2000, message: 'The product has been updated.'})
                        this.$router.push({path: '/products/index'})
                    })
                    .catch(error => {
                        this.$q.notify({type: 'negative', timeout: 2000, message: 'An error has been occured.'})
                        console.log(error)
                    })
            },
            deleteImage(){
                if (!this.deletedImage){
                    this.$q.dialog({
                        title: 'Delete',
                        message: 'Are you sure to delete image ' + this.prodImageId + '?',
                        color: 'primary',
                        ok: true,
                        cancel: true
                    }).onOk(() => {
                        axios.delete(`http://127.0.0.1:8000/api/image/${this.prodImageId}?productId=${this.$route.params.id}`)
                            .then(response => {
                            this.$q.notify({type: 'positive', timeout: 2000, message: 'Obrázok vymazaný.'})
                            this.deletedImage= true;
                            this.prodImageId = response.data.deleted;
                            this.url = `http://127.0.0.1:8000/api/image/` + response.data.deleted;
                        })
                            .catch(error => {
                                this.$q.notify({type: 'negative', timeout: 2000, message: 'Nastal problém pri mazaní obrázku.'})
                                console.log(error);
                            })

                    }).onCancel(() => {
                        // cancel - do nothing?
                    })

                } else{
                    this.$q.notify({type: 'negative', timeout: 2000, message: 'Obrázok už je vymazaný'})
                }
            }
        },
        mounted() {
           // this.setAll();
          this.getMakers();
          this.getMaincats();
          this.getSizes();
          this.getProduct();
          this.fileAdded = false;
        },
        computed: {
            productData: function () {
                return {
                    prodMeno: this.prodMeno,
                    prodPopis: this.prodPopis,
                    prodRam: this.prodRam,
                    prodVidlica: this.prodVidlica,
                    prodTlmic: this.prodTlmic,
                    prodKolesa: this.prodKolesa,
                    prodPrednyPlast: this.prodPrednyPlast,
                    prodZadnyPlast: this.prodZadnyPlast,
                    prodBrzdy: this.prodBrzdy,
                    prodKluky: this.prodKluky,
                    prodStredove: this.prodStredove,
                    prodRadenie: this.prodRadenie,
                    prodPrehadzovac: this.prodPrehadzovac,
                    prodKazeta: this.prodKazeta,
                    prodRetaz: this.prodRetaz,
                    prodNapinak: this.prodNapinak,
                    prodSedlovka: this.prodSedlovka,
                    prodSedlo: this.prodSedlo,
                    prodPredstavec: this.prodPredstavec,
                    prodRiadidla: this.prodRiadidla,
                    prodGripy: this.prodGripy,
                    prodHlavove: this.prodHlavove,
                    prodPedale: this.prodPedale,
                    prodVaha: this.prodVaha,
                    prodFarba: this.prodFarba,
                    prodExtra: this.prodExtra,
                    prodMaker: this.prodMaker,
                    prodMainCat: this.prodMainCat,
                    prodSubCat: this.prodSubCat,
                    prodSizes: this.prodSizes,
                    prodCena: this.prodCena,
                    prodImageId: this.prodImageId,
                }
            }
        },
      watch: {
        prodMainCatId : function(newValue,oldValue){
            console.log('prodMainCatId change')
            this.getSubCats(this.prodMainCatId);
            this.prodMaker = this.makers.find(x => x.id === this.prodMakerId)
            this.prodMainCat = this.maincats.find(x => x.id === this.prodMainCatId)
        },
        makers : function(newValue,oldValue){
            console.log('makers change')
            this.getSubCats(this.prodMainCatId);
            this.prodMaker = this.makers.find(x => x.id === this.prodMakerId)
            this.prodMainCat = this.maincats.find(x => x.id === this.prodMainCatId)
        },
        maincats : function (newValue,oldValue) {
            console.log('maincats change')
            this.getSubCats(this.prodMainCatId);
            this.prodMaker = this.makers.find(x => x.id === this.prodMakerId)
            this.prodMainCat = this.maincats.find(x => x.id === this.prodMainCatId)
        },
        subcats : function (newValue,oldValue) {
            console.log(`subcats change, old: ${oldValue} new: ${newValue}`)
            if ( oldValue == ''){
                this.getSubCats(this.prodMainCatId);
                this.prodSubCat = this.subcats.find(x => x.id === this.prodSubCatId)
            } else {
                this.prodSubCat = this.subcats[0];
            }

        }
      }
    }
</script>
