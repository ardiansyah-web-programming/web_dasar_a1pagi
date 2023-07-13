function hapusDialog(urlHapus) {
  if (confirm("Apakah data ini akan dihapus?")) {
    document.location(urlHapus)
  }
}