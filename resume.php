<?php
/**
 * My Work
 *
 * Things I'm proud to say I was a part of.
 *
 * @package     WordPress
 * @author      Kevin Leary <info@kevinleary.net>
 * @link        http://www.kevinleary.net
 */

class Resume extends Kevin {

    /**
     * Credibility
     *
     * Examples of my work, open-source contributions, and published works.
     */
    public function credibility() {

        $details = new stdClass;
        $details->portfolio = 'http://www.kevinleary.net';
        $details->blog = 'http://www.kevinleary.net/blog';
        $details->plugins = array(
            'Responsive Video Embeds'   => 'http://wordpress.org/plugins/responsive-video-embeds/',   // 22,000 downloads
            'Browser Shots'             => 'http://wordpress.org/plugins/browser-shots/',             // 11,000 downloads
            'Visual Editor Biography'   => 'http://wordpress.org/plugins/visual-biography-editor/',   // 5,000 downloads
        );
        $details->github = "https://github.com/Kevinlearynet";
        $details->writing = array(
            'Smashing Magazine'         => 'http://wp.smashingmagazine.com/author/kevin-leary/',
            'CSS-Tricks'                => 'http://css-tricks.com/creating-meet-team-page-wordpress/',
            'SixRevisions'              => 'Scheduled...',
        );
    }

    /**
     * Work History
     *
     * Where I've worked, and what I helped each organization acheive.
     *
     * @since 2006
     *
     * @see Non-tech version (PDF)
     * @link http://www.kevinleary.net/resume.pdf
     * @return string Evoke an email response.
     */
    public function history() {

        $details = new stdClass;

        switch ( $employer ) {

            // 1.2008 - Today
            case "kevinleary.net":
                $details->position = 'WordPress Engineer & Consultant';
                $details->duties = array(
                    'Design, build and improve WordPress powered websites for clients including: Boston Magazine, Tufts Medical Center, Philadelphia Magazine and Harvard University'
                );
                return true;

            // 12.2010 - Today
            case "OpenView Venture Partners":
                $details->position = 'Web Content Engineer';
                $details->duties = array(
                    'Build and maintain WP stack: Amazon EC2, Ubuntu Raring, nginx, PHP-FPM, memcache, WP Stack + WP Skeleton, WordPress Multisite',
                    'Re-design all websites to match brand',
                    'Consult with investment companies to improve architecture, design and website quality'
                );
                return true;

            // 4.2008 - 12.2010
            case "Fresh Tilled Soil":
                $details->position = 'Lead CMS Engineer';
                $details->duties = array(
                    'Manage a team of LAMP developers to design, architect and build content management systems using WordPress',
                    'Manage code quality reviews, creating guidelines and standards for the team',
                    'Assist UI designers with application design projects'
                );
                return true;

            // 5.2006 - 5.2008
            case "Bluehouse Group":
                $details->position = 'Front-end Web Developer';
                $details->duties = array(
                    'Transform complex application designs CSS, HTML, JavaScript and PHP/MySQL for Symfony MVC application builds',
                    "Improve the team's process, introducing ways to leverage open-source development"
                );
                return true;

            // 1.2006 - 8.2007
            case "CPASiteSolutions":
                $details->position = 'Web Designer';
                $details->duties = array(
                    'Transform <table> layouts into standards compliant, modular templates using CSS, HTML and JavaScript'
                );
                return true;
        } 
    }

    /**
     * Education
     *
     * Degree's and institutionalized knowledge.
     *
     * @since 2008
     */
    public function education() {

        // College degree
        $college = new stdClass;
        $college->school = 'Champlain College';
        $college->location = 'Burlington, VT';
        $college->degree = 'Bachelor of Science';
        $college->focus = 'Multimedia & Interactive Design / Web Design & Development';
    }
}
