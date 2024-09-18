import React from 'react';
import styles from '../styles/About.module.css';

const About = () => {
  const socialLinks = [
    { name: '𝕏', url: 'https://x.com/gullhaf', className: styles.twitter },
    { name: 'GitHub', url: 'https://github.com/danshahaf', className: styles.github },
    { name: 'LinkedIn', url: 'https://www.linkedin.com/in/shahaf-dan/', className: styles.linkedin },
    { name: 'Medium', url: 'https://medium.com/@shahafdan', className: styles.medium }
  ];

  return (
    <div id="about" className={styles.about}>
      <div className={styles.content}>
        <h1>Shahaf Dan</h1>
        <h3>Data Scientist • Engineer • Photographer</h3>
        
        <div className={styles.socialLinks}>
          {socialLinks.map((link, index) => (
            <a 
              key={index}
              href={link.url}
              target="_blank"
              rel="noopener noreferrer"
              className={`${styles.contactbtn} ${link.className}`}
            >
              {link.name}
            </a>
          ))}
        </div>

        <p>
          I live in New York City and work as a Data Scientist in resinsurance. 
          
          <br />
          <br />
          
          I was born in Israel, moved to California, studied in Boston, and now face the next chapter in the jungle of concrete.
                    
          <br />
          <br />

          In my free time I try to read, write, explore, and scavenge the city for the moments worth capturing on camera.

          <br />
          <br />

          For a while now I have been pondering the meaning of life, and am now trying to work on something worth dedicating it to.
          
          <br />
          <br />

          Stay tuned for more to come.
        </p>
      </div>
    </div>
  );
};

export default About;