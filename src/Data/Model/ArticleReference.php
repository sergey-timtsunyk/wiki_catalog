<?php


namespace Wiki\Catalog\Data\Model;


class ArticleReference
{
    private $id;
    private $articleId;
    private $link;
    private $content;

    /**
     * References constructor.
     * @param $content
     * @param $link
     * @param Article $content
     */
    public function __construct(string $link, string $content, Article $article)
    {
        $this->link = $link;
        $this->content = $content;
        $this->articleId = $article->getId();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * @param mixed $articleId
     */
    public function setArticleId($articleId): void
    {
        $this->articleId = $articleId;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    
    


}