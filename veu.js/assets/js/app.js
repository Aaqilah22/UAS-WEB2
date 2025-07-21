const { createApp } = Vue;
const apiUrl = "http://localhost/UAS-WEB/ci4/public";

createApp({
  data() {
    return {
      artikel: [],
      formData: {
        id: null,
        nama: "",       // ✅ ganti dari 'judul'
        no_hp: "",      // ✅ ganti dari 'isi'
        layanan: "",    // ✅ properti baru
        status: 0
      },
      showForm: false,
      formTitle: "Tambah Data",
      statusOptions: [
        { text: "Mengantri", value: 0 },
        { text: "Selesai", value: 1 },
      ],
    };
  },
  mounted() {
    this.loadData();
  },
  methods: {
    loadData() {
      axios
        .get(apiUrl + "/post")
        .then((response) => {
          this.artikel = response.data.artikel;
        })
        .catch((error) => console.error("Gagal load data:", error));
    },
    tambah() {
      this.formTitle = "Tambah Data";
      this.formData = {
        id: null,
        nama: "",       // ✅
        no_hp: "",      // ✅
        layanan: "",    // ✅
        status: 0
      };
      this.showForm = true;
    },
    edit(data) {
      this.formTitle = "Ubah Data";
      this.formData = { ...data };
      this.showForm = true;
    },
    hapus(index, id) {
      if (confirm("Yakin menghapus data?")) {
        axios
          .delete(apiUrl + "/post/" + id)
          .then(() => {
            this.artikel.splice(index, 1);
          })
          .catch((error) => console.error("Gagal hapus data:", error));
      }
    },
    saveData() {
      const method = this.formData.id ? "put" : "post";
      const url = this.formData.id
        ? apiUrl + "/post/" + this.formData.id
        : apiUrl + "/post";

      axios[method](url, this.formData)
        .then(() => {
          this.loadData();
          this.showForm = false;
          this.resetForm();
        })
        .catch((error) => console.error("Gagal simpan data:", error));
    },
    resetForm() {
      this.formData = {
        id: null,
        nama: "",       // ✅
        no_hp: "",      // ✅
        layanan: "",    // ✅
        status: 0
      };
    },
    statusText(status) {
      return status == 1 ? "Selesai" : "Mengantri";  // ✅ ubah label jika perlu
    },
  },
}).mount("#app");