CREATE TABLE companies(
    company_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    url_cover VARCHAR(32),
    title VARCHAR(32),
    subtitle VARCHAR(32),
    about_you TEXT,
    phone INT(32),
    location VARCHAR(32),
    service_product VARCHAR(32),
    about_company TEXT,
    linkedin VARCHAR(55),
    facebook VARCHAR(55),
    twitter VARCHAR(55),
    google VARCHAR(55)
);