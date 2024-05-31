# KitaplikWebProjesi

Bu proje, kullanıcıların kitap okuma alışkanlıklarını yönetmelerine ve kitapları takip etmelerine olanak tanıyan bir web uygulamasıdır. Kullanıcılar, okudukları kitapları görebilir, yeni kitap önerileri alabilir, en çok kitap okuyan kullanıcıları görüntüleyebilirler.

## Özellikler

- Adminlerin yeni kullanıcı ekleyebilmesi ve listelemesi
- Favori kitapları belirleme ve listeleyebilme
- Çok okuyan kullanıcıların listesi
- Kitap detayları ve yazar bilgileri
- Kitap arama ve filtreleme

## Kurulum

1. **Depoyu klonlayın:**

    ```sh
    git clone https://github.com/kullaniciadi/kitaplik.git
    ```

2. **Proje dizinine gidin:**

    ```sh
    cd kitaplik
    ```

3. **Veritabanını oluşturun:**

    - `kitaplik` adında bir MySQL veritabanı oluşturun.
    - Tabloları ve ilişkileri oluşturmak için `schema.sql` dosyasını kullanın.

4. **Veritabanı bağlantı ayarlarını güncelleyin:**

    - `config.php` dosyasında veritabanı bağlantı bilgilerini güncelleyin.

5. **Web sunucusunu başlatın:**

    - PHP'nin yüklü olduğundan emin olun.
    - Proje dizinini web sunucusunun kök dizinine taşıyın (örneğin, `htdocs` veya `www` dizinine).

6. **Tarayıcıdan erişim sağlayın:**

    - Tarayıcınızı açın ve `http://localhost/kitaplik` adresine gidin.

## Kullanım

- **Ana Sayfa:** Kitap ekleyebilir, favori kitaplarınızı listeleyebilir ve diğer kullanıcıların okuma listelerini görebilirsiniz.
- **Çok Okuyanlar:** En çok kitap okuyan kullanıcıların listesini görebilirsiniz.
- **Arama:** Kitap adı, yazar veya tarih gibi kriterlere göre arama yapabilirsiniz.

## Lisans

Bu proje MIT lisansı ile lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasına bakabilirsiniz.
