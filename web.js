const nomorInput = document.getElementById('nomor surat');
const tanggalInput = document.getElementById('tanggal surat');
const instansiInput = document.getElementById('instansi surat');
const disposisiInput = document.getElementById('disposisi surat');
const keteranganInput = document.getElementById('keterangan surat');
const addBtn = document.querySelector('.add-btn');
const studentList = document.getElementById('student-list');



function addSurat() {
    const nomor = nomorInput.value;
    const tanggal = tanggalInput.value;
    const instansi = instansiInput.value;
    const disposisi = disposisiInput.value;
    const keterangan = keteranganInput.value;

    const row = `
        <tr>
            <td>${nomor}</td>
            <td>${tanggal}</td>
            <td>${instansi}</td>
            <td>${disposisi}</td>
            <td>${keterangan}</td>
            <td>
                <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                <a href="#" class="btn btn-danger btn-sm delete">Hapus</a>
            </td>
        </tr>
    `;

    studentList.innerHTML += row;

    nomorInput.value = '';
    tanggalInput.value = '';
    instansiInput.value = '';
    disposisiInput.value = '';
    keteranganInput.value = '';
}

addBtn.addEventListener('click', function (e) {
    e.preventDefault();
    addSurat();
});

studentList.addEventListener('click', function (e) {
    if (e.target.classList.contains('edit')) {
        const row = e.target.closest('tr');
        const cells = row.getElementsByTagName('td');

        nomorInput.value = cells[0].textContent;
        tanggalInput.value = cells[1].textContent;
        instansiInput.value = cells[2].textContent;
        disposisiInput.value = cells[3].textContent;
        keteranganInput.value = cells[4].textContent;

        studentList.removeChild(row);
    } else if (e.target.classList.contains('delete')) {
        const row = e.target.closest('tr');
        studentList.removeChild(row);
    }
});
