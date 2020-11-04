<template>
  <div class="q-my-xl">
    <q-card>
      <q-card-section>Vytvorte nový produkt</q-card-section>
      <q-card-section>
        <q-input label="Meno" v-model="prodMeno" max-length="100"/>
        <q-select label="Výrobca" v-model="prodMaker" :options="makers" option-value="id" option-label="name"/>

        <q-select label="Hlavná kategória" v-model="prodMainCat" @input="getSubCats" :options="maincats" option-value="id" option-label="name"/>

        <div id="test"></div>

        <q-select label="Pod kategória" v-model="prodSubCat" :options="subcats" option-value="id" option-label="name"/>

        <q-input
          type="textarea"
          label="Popis"
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
          <q-uploader
            ref="uploader"
            label="Obrázok"
            accept=".jpg"
            :factory="uploadImage"
            @uploaded="fileUploaded"
            auto-expand
            @added = 'fileAction'
            @removed = 'fileAction'
            hide-upload-btn
          />
<!--        :form-fields="[{name: 'image', value: image'}]"-->
      </q-card-section>
      <q-card-actions class="q-mt-md">
        <div class="row justify-end full-width docs-btn">
          <q-btn label="Cancel" flat to="/products/index"/>
          <q-btn label="Create" color="primary" @click="submit"/>
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

    export default {
        data() {
            return {
                prodPopis: '',
                fileAdded: false,
                prodMaker: '',
                prodSizes: [],
                prodMainCat: '',
                prodSubCat: '',
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
                prodImageId: '',
                makers: [],
                sizes: [],
                maincats: [],
                subcats: [],
                prodId: '',
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
                    // formFields: [{name: 'prodId', value:this.prodId}],
                    })
                }))
            },
            request() {
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
            getSubCats() {
                document.getElementById("test").innerHTML = `http://127.0.0.1:8000/api/products/subcats/${this.prodMainCat.id}`;
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
            createProduct() {
                // console.log(`CREATE PRODUCT`);
                axios
                    .post(`http://127.0.0.1:8000/api/products`, this.productData)
                    .then(response => {
                        this.$q.notify({type: 'positive', timeout: 2000, message: 'Produkt bol vytvorený.'})
                        console.log(`odpoved: ${response.data.id}`);

                        this.$router.push({path: '/products/' + response.data.id + '/edit'})
                    })
                    .catch(error => {
                        this.$q.notify({type: 'negative', timeout: 2000, message: 'Nastal problém pri tvorení produktu.'})
                        console.log(error)
                    })
            },
            fileUploaded({files,xhr}){

                // console.log(JSON.parse(xhr.response).id);
                this.prodImageId = JSON.parse(xhr.response).id;
                this.createProduct();
                // console.log(`END FILE UPLOADED`);
            },
            submit() {
                if (this.fileAdded){
                    this.$refs.uploader.upload()
                } else {
                    this.$q.notify({type: 'negative', timeout: 2000, message: 'Vložte obrázok!'})
                }

                // this.createProduct();
                // this.prodId = response.data.id;
                // this.$refs.uploader.formFields= [{name: 'prodId', value:response.data.id}];
                // this.$refs.uploader.upload();

            }

        },
        mounted() {
            // once mounted, we need to trigger the initial server data fetch
            // Console.log('mounted');
            this.request();
            this.fileAdded = false;
            // Console.log(`fileAdded: ${this.fileAdded} `);
        },
        computed: {
            productData: function () {
                return {
                    fileAdded: this.fileAdded,
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
                    prodMaker: this.prodMaker,
                    prodSizes: this.prodSizes,
                    prodMainCat: this.prodMainCat,
                    prodSubCat: this.prodSubCat,
                    prodExtra: this.prodExtra,
                    prodCena: this.prodCena,
                    prodImageId: this.prodImageId,
                }
            }
        },
        watch: {
            // prodId: function (newValue, oldValue) {
            //     this.$refs.uploader.upload();
            // }

        }
    }
</script>
