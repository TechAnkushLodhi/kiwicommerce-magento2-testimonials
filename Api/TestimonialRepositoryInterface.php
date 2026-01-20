<?php
namespace KiwiCommerce\Testimonials\Api;

use KiwiCommerce\Testimonials\Api\Data\TestimonialInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface TestimonialRepositoryInterface
{
    /**
     * Save testimonial.
     *
     * @param TestimonialInterface $testimonial
     * @return TestimonialInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(TestimonialInterface $testimonial);

    /**
     * Retrieve testimonial by ID.
     *
     * @param int $testimonialId
     * @return TestimonialInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($testimonialId);

    /**
     * Delete testimonial.
     *
     * @param TestimonialInterface $testimonial
     * @return bool
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(TestimonialInterface $testimonial);

    /**
     * Delete testimonial by ID.
     *
     * @param int $testimonialId
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($testimonialId);

    /**
     * Retrieve testimonials matching the specified criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}
