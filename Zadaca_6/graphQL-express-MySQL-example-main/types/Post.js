const { GraphQLObjectType, GraphQLInt, GraphQLString, GraphQLList } = require('graphql');
const { dbQuery } = require('../database');
const BrandType = require('./Brand');


const PostType = new GraphQLObjectType({
  name: 'Post',
  fields:() => (
    {
      id: { type: GraphQLInt },
      createdAt: { type: GraphQLString },
      updatedAt: { type: GraphQLString },
      title: { type: GraphQLString },
      content: { type: GraphQLString },
      published: { type: GraphQLInt },
      brand: { 
        type: BrandType,
        resolve: async (post) => {
          let res = await dbQuery(`SELECT * FROM Brands WHERE brand_id = ${parseInt(post.id)}`);
          return res[0];
        }
      }
    }
  ) 
});

module.exports = PostType;