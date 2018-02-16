<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Contatos
 *
 * @ORM\Table(name="contatos", uniqueConstraints={@ORM\UniqueConstraint(name="contatos_email_unique", columns={"email"}), @ORM\UniqueConstraint(name="contatos_nome_unique", columns={"nome"})})
 * @ORM\Entity
 */
class Contatos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", nullable=false)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="posicao", type="string", nullable=false)
     */
    private $posicao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}

