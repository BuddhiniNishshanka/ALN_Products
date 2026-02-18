function scrollToSection() {
    document.getElementById("about").scrollIntoView({
        behavior: "smooth"
    });
}

function openModal(image, title, description, price) {
    document.getElementById("productModal").style.display = "block";
    document.getElementById("modalImage").src = image;
    document.getElementById("modalTitle").innerText = title;
    document.getElementById("modalDesc").innerText = description;
    document.getElementById("modalPrice").innerText = price;
}

function closeModal() {
    document.getElementById("productModal").style.display = "none";
}

