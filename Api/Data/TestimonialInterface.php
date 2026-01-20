<?php
namespace KiwiCommerce\Testimonials\Api\Data;

/**
 * @api
 */
interface TestimonialInterface
{
    const TESTIMONIAL_ID = 'testimonial_id';
    const COMPANY_NAME  = 'company_name';
    const NAME          = 'name';
    const MESSAGE       = 'message';
    const POST          = 'post';
    const PROFILE_PIC   = 'profile_pic';
    const STATUS        = 'status';
    const CREATED_AT    = 'created_at';
    const UPDATED_AT    = 'updated_at';

    /**
     * @return int|null
     */
    public function getTestimonialId();

    /**
     * @param int $id
     * @return $this
     */
    public function setTestimonialId($id);

    /**
     * @return string|null
     */
    public function getCompanyName();

    /**
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName);

    /**
     * @return string|null
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string|null
     */
    public function getMessage();

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message);

    /**
     * @return string|null
     */
    public function getPost();

    /**
     * @param string $post
     * @return $this
     */
    public function setPost($post);

    /**
     * @return string|null
     */
    public function getProfilePic();

    /**
     * @param string $profilePic
     * @return $this
     */
    public function setProfilePic($profilePic);

    /**
     * @return int
     */
    public function getStatus();

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus($status);

    /**
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * @return string|null
     */
    public function getUpdatedAt();
}
