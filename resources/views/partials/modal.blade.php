<!-- resources/views/partials/modal.blade.php -->
<div class="modal" id="roleModal">
    <div class="modal-content">
        <h3>Görev ve Biriminizi Seçiniz</h3>
        <form>
            <label for="unit">Birim Seçiniz</label>
            <select id="unit" name="unit" class="form-control">
            <option value="">Seçiniz</option>
                <option value="engineering">Mühendislik Fakültesi</option>
                <option value="arts_sciences">Fen-Edebiyat Fakültesi</option>
                <option value="law">Hukuk Fakültesi</option>
                <option value="medicine">Tıp Fakültesi</option>
                <option value="economics">İktisadi ve İdari Bilimler Fakültesi</option>
                <option value="education">Eğitim Fakültesi</option>
                <option value="communication">İletişim Fakültesi</option>
                <option value="architecture">Mimarlık Fakültesi</option>
                <option value="fine_arts">Güzel Sanatlar Fakültesi</option>
                <option value="health_sciences">Sağlık Bilimleri Fakültesi</option>
                <option value="sports">Spor Bilimleri Fakültesi</option>
                <option value="agriculture">Ziraat Fakültesi</option>
                <option value="veterinary">Veteriner Fakültesi</option>
            </select>

            <label for="role">Görevinizi Seçiniz</label>
            <select id="role" name="role" class="form-control">
            <option value="">Seçiniz</option>
                <option value="admin">Yönetici</option>
                <option value="student">Öğrenci</option>
                <option value="coach">Koç</option>
                <option value="teacher">Öğretim Görevlisi</option>
                <option value="staff">Personel</option>
                <option value="guest">Misafir</option>
            </select>

            <button type="submit" class="btn">Tamam</button>
        </form>
    </div>
</div>
